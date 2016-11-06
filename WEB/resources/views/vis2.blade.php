<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(getData);

    function getData() {

        $.get("/location", function (data) {

            drawChart(data);

        });
    }

    function drawChart(chartData) {

        var location = new Array();
        var numCount = new Array();

        var masterDataArray = new Array();

        masterDataArray.push(['Location', 'Frequency']);

        for (i = 0; i < chartData.data.length; i++) {

            masterDataArray.push([chartData.data[i].answer, chartData.data[i].count]);
        }

        masterDataArray.push(['other', chartData.other]);

        console.log(masterDataArray);
        
        var dataTEST = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work',     11],
          ['Eat',      2],
          ['Commute',  2],
          ['Watch TV', 2],
          ['Sleep',    7]
        ]);

        var masterData = google.visualization.arrayToDataTable([masterDataArray]);

        console.log(masterData);

        var options = {
            title: 'Location'
        };

        var chart = new google.visualization.PieChart(document.getElementById('chart2'));

        chart.draw(masterData, options);
    }
</script>
<div id="chart2" style="width: 900px; height: 500px"></div>