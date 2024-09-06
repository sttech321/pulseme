<div id="donut-chart"></div>
<div id="chart-info" style="text-align: center; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-family: Arial, sans-serif;">
    <div style="font-size: 16px; color: #333;">Scans</div>
    <div style="margin-top:10px;"><?= $statuspending ?></div>
</div>
<script>
    var statusDone = <?= $statusdone ?>;
    var statusPending = <?= $statuspending ?>;
   
    document.addEventListener("DOMContentLoaded", function() {
        var options = {
            chart: {
                type: 'donut',
                height: 350
            },
            colors: ['#3399ff', '#ff9900'],
            series: [statusDone, statusPending], // Corrected variable name
            labels: ['Contact Card Numbers', 'Pending'], // Updated labels for consistency
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