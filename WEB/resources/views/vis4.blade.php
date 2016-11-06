<script type="text/javascript">
    google.charts.load('current', {packages: ['corechart', 'bar']});
    google.charts.setOnLoadCallback(drawChart);
    
    
    function drawChart() {
        
        
        var data = new google.visualization.DataTable();

        data.addColumn('string', 'Symptom');
        data.addColumn('number', 'Frequency');
        data.addColumn({ type: 'string', role: "style" });

        var location = new Array();
        var frequency = new Array();

        var symptomColors = ["#FFE082", "#FFD54F", "#FFCA28", "#FFC107", "#FFB300", "#FFA000", "#FF8F00", "#FF6F00"];
        
        @foreach($array['data'] as $chartData)
            data.addRow(['{{ $chartData->symptom }}', {{ (int)$chartData->count }}, symptomColors[{{ $loop->index % 8 }}]]);
        @endforeach
        /*for (i = 0; i < chartData.data.length; i++) {

            masterDataArray.push([chartData.data[i].answer, parseInt(chartData.data[i].count]));
        }*/

        data.addRow(['other', {{ (int)$array['other']['count'] }}, symptomColors[4]]);
        
        

        var options = {
            bars: 'horizontal',
            hAxis: {
                title: 'Count',
                //minValue: 0
            },
            vAxis: {
                title: 'Symptoms'
            },
            legend:{position: 'none'}
        };

        var chart = new google.visualization.BarChart(document.getElementById('chart4'));

        chart.draw(data, options);
    }
</script>
<div id="chart4" style="width: 900px; height: 500px"></div>