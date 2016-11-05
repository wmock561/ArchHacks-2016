<script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawSeriesChart);

    function drawSeriesChart() {

      var data = google.visualization.arrayToDataTable([
        ['ID', 'Date', 'Time of Day', 'Severity', 'Duration'],
        ['DATE', 80.66, 1.67, 1, 33739900],
        ['DATE', 79.84, 1.36, 10, 81902307],
        ['DATE', 78.6, 1.84, 7, 5523095],
        ['DATE', 72.73, 2.78, 8, 79716203],
        ['DATE', 80.05, 2, 9, 61801570],
        ['DATE', 72.49, 1.7, 5, 73137148],
        ['DATE', 68.09, 4.77, 4, 31090763],
        ['DATE', 81.55, 2.96, 3, 7485600],
        ['DATE', 68.6, 1.54, 5, 141850000],
        ['DATE', 78.09, 2.05, 6,  307007000]
      ]);

      var options = {
        title: 'Correlation between Date, Time of Day, duration and severity of Panic Attacks ',
        hAxis: {title: 'Date'},
        vAxis: {title: 'Time of Day'},
        bubble: {textStyle: {fontSize: 11}},
        colorAxis: {colors: ['yellow','red']}
      };

      var chart = new google.visualization.BubbleChart(document.getElementById('chart1'));
      chart.draw(data, options);
    }
</script>
<div id="chart1" style="width: 900px; height: 500px"></div>