<div id="reviews-rating-chart"></div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var options = {
            series: [{
                    name: 'Reviews',
                    type: 'bar',
                    data: [{
                            x: 'Mar',
                            y: 200
                        },
                        {
                            x: 'April',
                            y: 300
                        },
                        {
                            x: 'May',
                            y: 400
                        },
                        {
                            x: 'June',
                            y: 500
                        },
                        {
                            x: 'July',
                            y: 600
                        },
                        {
                            x: 'Aug',
                            y: 700
                        },
                    ]
                },
                {
                    name: 'Ratings',
                    type: 'line',
                    data: [{
                            x: 'Mar',
                            y: 4.0
                        },
                        {
                            x: 'April',
                            y: 4.1
                        },
                        {
                            x: 'May',
                            y: 4.3
                        },
                        {
                            x: 'June',
                            y: 4.2
                        },
                        {
                            x: 'July',
                            y: 4.5
                        },
                        {
                            x: 'Aug',
                            y: 4.6
                        },
                    ]
                }
            ],
            chart: {
                height: 350,
                type: 'line',
                stacked: false,
                zoom: {
                    enabled: false // Zoom is off
                },
                toolbar: {
                    show: false // Hide toolbar
                }
            },
            plotOptions: {
                bar: {
                    columnWidth: '70%',
                    borderRadius: 0 // No rounded corners for bars
                },
                line: {
                    curve: 'smooth' // Smooth curve for line chart
                }
            },
            colors: ['#007bff', '#000'], // Blue for Reviews, Orange for Ratings
            dataLabels: {
                enabled: false
            },
            xaxis: {
                categories: ['Mar', 'April', 'May', 'June', 'July', 'Aug'],
                title: {
                    text: ''
                }
            },
            yaxis: [{
                    title: {
                        text: 'Reviews'
                    },
                    labels: {
                        formatter: function(val) {
                            return val; // Show exact value for Reviews
                        }
                    }
                },
                {
                    opposite: true,
                    title: {
                        text: 'Ratings'
                    },
                    min: 0,
                    max: 5,
                    labels: {
                        formatter: function(val) {
                            return val.toFixed(1); // Format Ratings from 0.0 to 5.0
                        }
                    }
                }
            ],
            legend: {
                show: true,
                position: 'bottom'
            },
            tooltip: {
                shared: true,
                intersect: false,
                y: {
                    formatter: function(val) {
                        return val; // Show exact value on hover
                    }
                }
            }
        };

        var chart = new ApexCharts(document.querySelector("#reviews-rating-chart"), options);
        chart.render();
    });
</script>