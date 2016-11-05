<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawSeriesChart);

    var ts = moment("10/15/2014 23:00", "M/D/YYYY H:mm").valueOf();
    var m = moment(ts);
    var s = m.format("M/D/YYYY H:mm");
    
    console.log(ts);
    console.log(s);
    

    function drawSeriesChart() {

        var data = google.visualization.arrayToDataTable([
        ['ID', 'Date', 'Time of Day', 'Severity', 'Duration'],
        ['2016/1/05 09:33:35am', '2016/1/05', '09:33:35am', 1, 33739900],
        ['2016/2/05', '2016/1/05', '10:27:35pm', 2, 81902307],
        ['2016/3/05', '2016/3/05', '02:10:35am', 3, 5523095],
        ['2016/4/05', '2016/4/05', '04:50:35pm', 4, 79716203],
        ['2016/5/05', '2016/5/05', '06:44:35am', 6, 61801570],
        ['2016/6/05', '2016/6/05', '06:54:35pm', 5, 73137148],
        ['2016/7/05', '2016/7/05', '08:24:35am', 7, 31090763],
        ['2016/8/05', '2016/8/05', '03:29:35pm', 8, 7485600],
        ['2016/9/05', '2016/9/05', '07:11:35am', 10, 141850000],
        ['2016/10/05', '2016/10/05', '09:01:35pm', 10, 307007000]
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