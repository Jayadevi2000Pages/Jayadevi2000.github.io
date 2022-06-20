<?php
require_once 'header.php';
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<div style="margin: auto;background-color: white;margin-right: 10%;margin-left: 10%;margin-bottom: 0">
<h1>Visitas</h1>
<canvas id="myChart" style="margin:auto;width:100%;max-width:700px"></canvas>

<script>
    var xyValues = [
        {x:5, y:7},
        {x:60, y:8},
        {x:70, y:8},
        {x:80, y:9},
        {x:90, y:9},
        {x:100, y:9},
        {x:110, y:4},
        {x:120, y:2},
        {x:130, y:6},
        {x:140, y:7},
        {x:150, y:5}
    ];

    new Chart("myChart", {
        type: "scatter",
        data: {
            datasets: [{
                pointRadius: 4,
                pointBackgroundColor: "rgb(0,0,255)",
                data: xyValues
            }]
        },
        options: {
            legend: {display: false},
            scales: {
                xAxes: [{ticks: {min: 40, max:160}}],
                yAxes: [{ticks: {min: 6, max:16}}],
            }
        }
    });

</script>
</div>
<?php
require_once 'footer.php';
?>


