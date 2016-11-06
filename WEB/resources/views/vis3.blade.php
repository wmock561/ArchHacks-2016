<script type="text/javascript">
      google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawPieChart);

    function drawPieChart() {

        var location = new Array();
        var numCount = new Array();

        var masterDataArray = new Array();

        masterDataArray.push(['Cause', 'Frequency']);
        
        @foreach($array['data'] as $chartData)
            masterDataArray.push(['{{ $chartData->answer }}', {{ (int)$chartData->count }}]);
        @endforeach
        /*for (i = 0; i < chartData.data.length; i++) {

            masterDataArray.push([chartData.data[i].answer, parseInt(chartData.data[i].count]));
        }*/

        masterDataArray.push(['other', {{ (int)$array["other"] }}]);

        console.log(masterDataArray);

        var masterData = google.visualization.arrayToDataTable([masterDataArray]);

        console.log(masterData);

        var options = {
            title: 'Cause'
        };

        var chart = new google.visualization.PieChart(document.getElementById('chart3'));

        chart.draw(masterData, options);
    }
    </script>
<div id="chart3" style="width: 900px; height: 500px"></div>