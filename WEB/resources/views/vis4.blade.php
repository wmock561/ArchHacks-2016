<script type="text/javascript">
    google.charts.load('current', {packages: ['corechart', 'bar']});
    google.charts.setOnLoadCallback(drawChart);
    
    
    function drawChart() {
        
        
        var data = new google.visualization.DataTable();

        data.addColumn('string', 'Symptom');
        data.addColumn('number', 'Frequency');

        var location = new Array();
        var frequency = new Array();
        
        @foreach($array['data'] as $chartData)
            data.addRow(['{{ $chartData->symptom }}', {{ (int)$chartData->count }}]);
        @endforeach
        /*for (i = 0; i < chartData.data.length; i++) {

            masterDataArray.push([chartData.data[i].answer, parseInt(chartData.data[i].count]));
        }*/

        data.addRow(['other', {{ (int)$array['other']['count'] }}]);
        
        console.log(data);

        var options = {
            title: 'Symptom',
            bars: 'horizontal',
            hAxis: {
                title: 'Count',
                //minValue: 0
            },
            vAxis: {
                title: 'Symptoms'
            }
        };

        var chart = new google.visualization.BarChart(document.getElementById('chart4'));

        chart.draw(data, options);
    }
</script>
<div id="chart4" style="width: 900px; height: 500px"></div>