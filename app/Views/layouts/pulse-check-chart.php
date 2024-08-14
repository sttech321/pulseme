<div id="pulse-chart"></div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var options = {
            chart: {
                type: 'area',
                height: 350,
                zoom: {
                    enabled: false // Zoom is off
                },
                toolbar: {
                    show: false // Hide toolbar
                }
            },
            plotOptions: {
                area: {
                    lineTension: 0.6 // Higher tension for pulse-like effect
                }
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'smooth', // Smoother curve for pulse effect
                width: 2
            },
            colors: ['#007bff'], // Blue for Email
            series: [{
                name: 'Email',
                data: [34, 44, 54, 21, 12, 43, 33, 23, 66, 66, 58]
            }],
            xaxis: {
                categories: ['2024-01-01', '2024-02-01', '2024-03-01', '2024-04-01', '2024-05-01', '2024-06-01', '2024-07-01', '2024-08-01', '2024-09-01', '2024-10-01', '2024-11-01'], // Date-wise categories
                type: 'datetime',
                labels: {
                    format: 'd/M/yyyy' // Date format as day/month/year
                }
            },
            tooltip: {
                shared: true,
                intersect: false,
                x: {
                    format: 'd/M/yyyy' // Show full date on hover
                }
            },
            legend: {
                position: 'bottom' // Legend at the bottom
            }
        };

        var chart = new ApexCharts(document.querySelector("#pulse-chart"), options);
        chart.render();
    });
</script>