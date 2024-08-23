<div id="chart"></div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Fetch and parse data from PHP variables
        var bioDates = <?= $bioDates ?>;
        var bioCounts = <?= $bioCounts ?>;

        console.log('Dates:', bioDates);
        console.log('Counts:', bioCounts);

        // Initialize the chart options
        var options = {
            chart: {
                type: 'area',
                stacked: true,
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
                    stacking: 'normal',
                    lineTension: 0.3
                }
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'smooth' // Smoother curve for an analog look
            },
            colors: ['#007bff'], // Blue for Email
            series: [{
                name: 'Email',
                data: bioCounts // Use the counts data for the series
            }],
            xaxis: {
                categories: bioDates, // Use the dates for x-axis categories
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

        // Create and render the chart
        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
    });
</script>
