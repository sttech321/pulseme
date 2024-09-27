<div id="pulse-chart"></div>
<script>
    document.addEventListener("DOMContentLoaded", function() {

        // Fetch and parse data from PHP variables
        var dates = <?= $dates ?>;
        var smspulse = <?= $smspulse ?>;
        var emailpulse = <?= $emailpulse ?>;

        console.log('Dates:', dates);
        console.log('Counts:', emailpulse);
        console.log('smsDates:', smspulse);

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
                    name: 'Email',
                    data: emailpulse // Use the Email counts data for the first series
                },
                {
                    name: 'SMS',
                    data: smspulse // Use the SMS counts data for the second series
                }
            ],
            xaxis: {
                categories: dates, // Use Email dates for x-axis categories (assuming both series share the same dates)
                type: 'datetime',
                labels: {
                    format: 'dd/MM/yyyy' // Date format as day/month/year
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
