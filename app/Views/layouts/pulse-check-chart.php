<div id="pulse-chart"></div>
<script>
    document.addEventListener("DOMContentLoaded", function() {

        // Fetch and parse data from PHP variables
        var pulsecheckDates = <?= $pulsecheckDates ?>;
        var pulsecheckCounts = <?= $pulsecheckCounts ?>;
        // var pulsecat = [ '2024-08-13'];

        console.log('Dates:', pulsecheckDates);
        console.log('Counts:', pulsecheckCounts);

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
                data: pulsecheckCounts
            }],
            xaxis: {
               categories: pulsecheckDates, // Date-wise categories
                type: 'datetime',
                labels: {
                    format: 'd/M/yyyy' // Date format as day/month/year
                    // console.log('categories',categories);
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
