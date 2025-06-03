<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Chart / Importação - Arquivo Remoto
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
     Google Chart / Importação - Arquivo Local
    <script type="text/javascript" src="{{asset('js/google-chart-loader.js')}}"></script> -->

    <title>Document</title>
</head>
<body>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
  function drawChart() {
    var oldData = google.visualization.arrayToDataTable([
      ['Name', 'Popularity'],
      ['Cesar', 250],
      ['Rachel', 4200],
      ['Patrick', 2900],
      ['Eric', 8200]
    ]);

    var newData = google.visualization.arrayToDataTable([
      ['Name', 'Popularity'],
      ['Cesar', 370],
      ['Rachel', 600],
      ['Patrick', 700],
      ['Eric', 1500]
    ]);

    var colChartBefore = new google.visualization.ColumnChart(document.getElementById('colchart_before'));
    var colChartAfter = new google.visualization.ColumnChart(document.getElementById('colchart_after'));
    var colChartDiff = new google.visualization.ColumnChart(document.getElementById('colchart_diff'));
    var barChartDiff = new google.visualization.BarChart(document.getElementById('barchart_diff'));

    var options = { legend: { position: 'top' } };

    colChartBefore.draw(oldData, options);
    colChartAfter.draw(newData, options);

    var diffData = colChartDiff.computeDiff(oldData, newData);
    colChartDiff.draw(diffData, options);
    barChartDiff.draw(diffData, options);
  }
</script>

<span id='colchart_before' style='width: 450px; height: 250px; display: inline-block'></span>
<span id='colchart_after' style='width: 450px; height: 250px; display: inline-block'></span>
<span id='colchart_diff' style='width: 450px; height: 250px; display: inline-block'></span>
<span id='barchart_diff' style='width: 450px; height: 250px; display: inline-block'></span>
  </head>
  <body>
    <div id="table_div"></div>
  </body>
</html>