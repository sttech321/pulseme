<div id="chart"></div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Fetch and parse data from PHP variables
        var bioDates = <?= $bioDates ?>;
        var bioCounts = <?= $bioCounts ?>;
        var smsbioDates = <?= $smsbioDates ?>;
        var smsbioCounts = <?= $smsbioCounts ?>;

        console.log('Email Dates:', bioDates);
        console.log('Email Counts:', bioCounts);
        console.log('SMS Dates:', smsbioDates);
        console.log('SMS Counts:', smsbioCounts);

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
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'smooth' // Smoother curve for an analog look
            },
            colors: ['#007bff', '#28a745'], // Blue for Email, Green for SMS
            series: [
                {
                    name: 'Email',
                    data: bioCounts // Use the Email counts data for the first series
                },
                {
                    name: 'SMS',
                    data: smsbioCounts // Use the SMS counts data for the second series
                }
            ],
            xaxis: {
                categories: bioDates, // Use Email dates for x-axis categories (assuming both series share the same dates)
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

        // Create and render the chart
        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
    });
</script>
