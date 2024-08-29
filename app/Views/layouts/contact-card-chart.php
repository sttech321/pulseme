<div id="donut-chart"></div>
<div id="chart-info" style="text-align: center; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-family: Arial, sans-serif;">
    <div class="mb-10" style="font-size: 18px; color: #333;">Card</div>
    <div style="font-size: 16px; color: #333;">Numbers</div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var options = {
            chart: {
                type: 'donut',
                height: 350
            },
            colors: ['#3399ff', '#ff9900'],
            series: [75, 25],
            labels: ['Contact Card Numbers','pending'],
            plotOptions: {
                pie: {
                    donut: {
                        size: '70%'
                    }
                }
            },
            dataLabels: {
                enabled: false
            },
            legend: {
                show: false
            }
        };

        var chart = new ApexCharts(document.querySelector("#donut-chart"), options);
        chart.render();
    });
</script>