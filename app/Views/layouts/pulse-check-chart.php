<div id="pulse-chart"></div>
<script>
    document.addEventListener("DOMContentLoaded", function() {

        // Fetch and parse data from PHP variables
        var pulsecheckDates = <?= $pulsecheckDates ?>;
        var pulsecheckCounts = <?= $pulsecheckCounts ?>;
        var smspulsecheckDates = <?= $smspulsecheckDates ?>;
        var smspulsecheckCounts = <?= $smspulsecheckCounts ?>;

        console.log('Dates:', pulsecheckDates);
        console.log('Counts:', pulsecheckCounts);
        console.log('smsDates:', smspulsecheckDates);
        console.log('smsCounts:', smspulsecheckCounts);

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
            colors: ['#007bff', '#28a745'], // Blue for Email, Green for SMS
            series: [
                {
                    name: 'Email', // Label for Email data
                    data: pulsecheckCounts
                },
                {
                    name: 'SMS', // Label for SMS data
                    data: smspulsecheckCounts
                }
            ],
            xaxis: {
                categories: pulsecheckDates, // Date-wise categories for x-axis
                type: 'datetime',
                labels: {
                    format: 'dd/MM/yyyy'
                    // formatter: function(val) {
                    //     const date = new Date(val);
                    //     return date.getDate() + '/' + (date.getMonth() + 1) + '/' + date.getFullYear(); // Date format as day/month/year
                    // }
                }
            },
            tooltip: {
                shared: true,
                intersect: false,
                x: {
                    format: 'dd/MM/yyyy' // Show full date on hover
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
