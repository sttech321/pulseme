<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Map with Real-time Tracking</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .map {
            height: 800px;
            width: 100%;
        }
        .vehicle-icon {
            width: 30px;
            height: 30px;
        }
        .start-icon, .destination-icon {
            width: 20px;
            height: 20px;
            border-radius: 50%;
        }
        .start-icon {
            background-color: blue;
        }
        .destination-icon {
            background-color: red;
        }
        .info-box {
            padding: 10px;
            background: white;
            border: 1px solid #ddd;
            width: 200px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div id="map" class="map"></div>
    <!-- Modal for Error Message -->
    <div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <p class="p-3 text-danger h2 text-center"><?= session()->getFlashdata('error') ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const errorMessage = "<?= session()->getFlashdata('error') ?>"; // Get the error message
        if (errorMessage) {
            // Show the modal if there's an error message
            // $('#errorModal').modal('show');
        }
    });
    </script>
    <script>
        // Initialize the map
        var map = L.map('map').setView([27.8550856, -82.7852595], 13);
        // Add tile layer
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 18,
        }).addTo(map);

        // Define vehicle and marker icons
        var vehicleIcon = L.divIcon({
            className: 'vehicle-icon',
            html: '<i class="fa fa-car fa-3x"></i>',
            iconSize: [30, 42],
            iconAnchor: [15, 42]
        });

        var startIcon = L.divIcon({
            className: 'start-icon'
        });

        var destinationIcon = L.divIcon({
            className: 'destination-icon'
        });

        // Variables for tracking distance
        var totalDistance = 0.0;
        var lastPosition = null; 
        var startMarker;

        function updateLocation() {
            var deviceId = '<?= $deviceId ?>'; // Fetch deviceId from PHP
            console.log(deviceId, 'deviceId');
            var url = `/auth/statustrack/${deviceId}`;
            console.log(url, 'url');

            fetch(url)
                .then(response => response.json())
                .then(data => {
                        console.log(data,'dffgffg'); // Log the entire response to verify latitude, longitude, speed
                        var currentPosition = [data.latitude, data.longitude];

                    if (currentPosition[0] && currentPosition[1]) {
                        // Remove existing vehicle marker if it exists
                        if (window.vehicleMarker) {
                            map.removeLayer(window.vehicleMarker);
                        }
                        // Add the new vehicle marker at current position
                        window.vehicleMarker = L.marker(currentPosition, { icon: vehicleIcon }).addTo(map);

                        // Check if the startMarker is already initialized
                        if (!startMarker) {
                            // Create start marker for the first time using the current position
                            startMarker = L.marker(currentPosition, { icon: startIcon }).addTo(map).bindPopup('Start');
                        } else {
                            // Update the start marker position with the fetched current position
                            startMarker.setLatLng(currentPosition).bindPopup('Start (Updated)').update();
                        }

                        // Fetch and display route
                        fetchRoute(currentPosition, deviceId);

                        // Calculate distance covered if there is a previous position
                        if (lastPosition) {
                            var distance = calculateDistance(lastPosition, currentPosition);
                            totalDistance += distance;
                            document.getElementById('distance').innerText = totalDistance.toFixed(2);
                        }
                        // Update last position
                        lastPosition = currentPosition;
                    }
                })
                .catch(error => console.error('Error fetching location:', error));
        }
        // Update location every 2 seconds
        setInterval(updateLocation, 2000);

        function fetchRoute(currentPosition, deviceId) {
            var startLat = currentPosition[0];
            var startLng = currentPosition[1];
            var url = `/direction/${deviceId}?origin=${startLat},${startLng}`;

            fetch(url)
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }
                    return response.json();
                })
                .then(data => {
                    const endLocationLat = data.routes[0].legs[0].end_location.lat;
                    const endLocationLng = data.routes[0].legs[0].end_location.lng;
                    console.log('Southwest lat:', endLocationLat, 'Southwest lng:', endLocationLng);

                    // Add destination marker using southwest lat/lng from the bounds
                    var destinationMarker = L.marker([endLocationLat, endLocationLng], { icon: destinationIcon }).addTo(map).bindPopup('Destination');
                    console.log('destination-marker', destinationMarker);

                    if (data.routes && data.routes.length > 0) {
                        var routeCoordinates = data.routes[0].overview_polyline.points;
                        var latlngs = decodePolyline(routeCoordinates);
                        if (window.routePolyline) {
                            map.removeLayer(window.routePolyline);
                        }

                        window.routePolyline = L.polyline(latlngs, { color: 'blue' }).addTo(map);
                        map.fitBounds(window.routePolyline.getBounds());
                    } else {
                        console.error('No route data found');
                    }
                })
                .catch(error => {
                    console.error('Error fetching route:', error);
                });
        }

        function calculateDistance(latlng1, latlng2) {
            var R = 6371; // Radius of the Earth in km
            var dLat = (latlng2[0] - latlng1[0]) * Math.PI / 180;
            var dLng = (latlng2[1] - latlng1[1]) * Math.PI / 180;
            var a = Math.sin(dLat / 2) * Math.sin(dLat / 2) +
                    Math.cos(latlng1[0] * Math.PI / 180) * Math.cos(latlng2[0] * Math.PI / 180) *
                    Math.sin(dLng / 2) * Math.sin(dLng / 2);
            var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
            var distance = R * c;
            return distance;
        }

        function decodePolyline(encoded) {
            var points = [];
            var len = encoded.length;
            var index = 0;
            var lat = 0;
            var lng = 0;

            while (index < len) {
                var b, shift = 0, result = 0;
                do {
                    b = encoded.charCodeAt(index++) - 63;
                    result |= (b & 0x1f) << shift;
                    shift += 5;
                } while (b >= 0x20);
                var dlat = (result & 1) ? ~(result >> 1) : (result >> 1);
                lat += dlat;
                shift = 0;
                result = 0;
                do {
                    b = encoded.charCodeAt(index++) - 63;
                    result |= (b & 0x1f) << shift;
                    shift += 5;
                } while (b >= 0x20);
                var dlng = (result & 1) ? ~(result >> 1) : (result >> 1);
                lng += dlng;
                points.push([lat / 1E5, lng / 1E5]);
            }
            return points;
        }
    </script>
</body>
</html>
