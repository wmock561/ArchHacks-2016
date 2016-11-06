<script type="text/javascript">
      google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);
    
    
    function drawChart() {
        
        
        var data = new google.visualization.DataTable();

        data.addColumn('string', 'Cause');
        data.addColumn('number', 'Frequency');

        var location = new Array();
        var frequency = new Array();
        
        @foreach($array['data'] as $chartData)
            data.addRow(['{{ $chartData->answer }}', {{ (int)$chartData->count }}]);
        @endforeach
        /*for (i = 0; i < chartData.data.length; i++) {

            masterDataArray.push([chartData.data[i].answer, parseInt(chartData.data[i].count]));
        }*/

        data.addRow(['other', {{ (int)$array['other'] }}]);
        
        console.log(data);

        var options = {
            title: 'Cause'
        };

        var chart = new google.visualization.PieChart(document.getElementById('chart3'));

        chart.draw(data, options);
    }
    </script>
<div id="chart3" style="width: 900px; height: 500px"></div>