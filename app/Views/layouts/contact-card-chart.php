<div id="donut-chart"></div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var options = {
            chart: {
                type: 'donut',
                height: 350
            },
            colors: ['#3399ff'], // Medium-light blue color
            series: [75], // Example value for contact card numbers
            labels: ['Contact Card Numbers'],
            plotOptions: {
                pie: {
                    donut: {
                        size: '70%'
                    }
                }
            },
            dataLabels: {
                enabled: false // Don't show the percentage inside the donut
            },
            legend: {
                show: false // Hide legend
            }
        };

        var chart = new ApexCharts(document.querySelector("#donut-chart"), options);
        chart.render();
    });
</script>