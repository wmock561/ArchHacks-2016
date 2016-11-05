<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawSeriesChart);

    function drawSeriesChart() {

        var data = google.visualization.arrayToDataTable([
        ['ID', 'Date', 'Time of Day', 'Severity', 'Duration'],
        ['DATE', '2016/11/05', 1.67, 1, 33739900],
        ['DATE', '2016/11/05', 10, 81902307],
        ['DATE', '2016/11/05', 7, 5523095],
        ['DATE', '2016/11/05', 8, 79716203],
        ['DATE', '2016/11/05', 61801570],
        ['DATE', '2016/11/05', 5, 73137148],
        ['DATE', '2016/11/05', 4, 31090763],
        ['DATE', '2016/11/05', 3, 7485600],
        ['DATE', '2016/11/05', 5, 141850000],
        ['DATE', '2016/11/05', 6, 307007000]
      ]);

        var options = {
            title: 'Correlation between Date, Time of Day, duration and severity of Panic Attacks ',
            hAxis: {
                title: 'Date'
            },
            vAxis: {
                title: 'Time of Day'
            },
            bubble: {
                textStyle: {
                    fontSize: 11
                }
            },
            colorAxis: {
                colors: ['yellow', 'red']
            }
        };

        var chart = new google.visualization.BubbleChart(document.getElementById('chart1'));
        chart.draw(data, options);
    }
</script>
<?php
    echo "The time is " . date("h:i:sa");
?>
    <div id="chart1" style="width: 900px; height: 500px"></div>