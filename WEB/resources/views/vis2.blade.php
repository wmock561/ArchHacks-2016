<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        
        
        var data = new google.visualization.DataTable();

        data.addColumn('string', 'Location');
        data.addColumn('number', 'Frequency');

        var location = new Array();
        var frequency = new Array();
        
        @foreach($array['data'] as $chartData)
            data.addRow(['{{ $chartData->answer }}', {{ (int)$chartData->count }}]);
        @endforeach
        /*for (i = 0; i < chartData.data.length; i++) {

            masterDataArray.push([chartData.data[i].answer, parseInt(chartData.data[i].count]));
        }*/

        data.addRow(['other', {{ $array['other'] }}]);
        
        var locationColors = ["#90CAF9", "#64B5F6", "#42A5F5", "#2196F3", "#1E88E5", "#1976D2", "#1565C0", "#0D47A1"];

        var options = {
            title: 'Location',
            colors: locationColors
        };

        var chart = new google.visualization.PieChart(document.getElementById('chart2'));

        chart.draw(data, options);
    }
</script>
<div id="chart2" style="width: 900px; height: 500px"></div>