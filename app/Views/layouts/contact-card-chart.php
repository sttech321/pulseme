<div id="donut-chart"></div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var options = {
            chart: {
                type: 'donut',
                height: 350
            },
            colors: ['#3399ff', '#ffff00'], // Medium-light blue and yellow color
            series: [75, 25], // 75% for the first color, 25% for the second
            labels: ['Contact Card Numbers', 'Other Category'],
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
