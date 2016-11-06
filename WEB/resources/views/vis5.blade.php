<script type="text/javascript">
    google.charts.load('current', {packages: ['corechart', 'bar']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        
        
        var data = new google.visualization.DataTable();

        data.addColumn('string', 'Technique');
        data.addColumn('number', 'Frequency');
        data.addColumn({ type:'string', role: 'style' });

        var location = new Array();
        var frequency = new Array();

        var calmingColors = ["#E6EE9C", "#DCE775", "#D4E157", "#CDDC39", "#C0CA33", "#AFB42B", "#9E9D24", "#827717"];
        @foreach($array['data'] as $chartData)
            data.addRow(['{{ $chartData->technique }}', {{ (int)$chartData->count }}, calmingColors[{{ $loop->index % 8 }}]]);
        @endforeach
        /*for (i = 0; i < chartData.data.length; i++) {

            masterDataArray.push([chartData.data[i].answer, parseInt(chartData.data[i].count]));
        }*/

        data.addRow(['other', {{ (int)$array['other']['count'] }}, calmingColors[4]]);
        
        

        var options = {
            bars: 'horizontal',
            hAxis: {
                title: 'Count',
                //minValue: 0
            },
            vAxis: {
                title: 'Techniques'
            },
            legend:{position: 'none'}
        };

        var chart = new google.visualization.BarChart(document.getElementById('chart5'));

        chart.draw(data, options);
    }
</script>
<div id="chart5" style="width: 900px; height: 500px"></div>