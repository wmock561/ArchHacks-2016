<script type="text/javascript">
    google.charts.load('current', {packages: ['corechart', 'bar']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        
        
        var data = new google.visualization.DataTable();

        data.addColumn('string', 'Technique');
        data.addColumn('number', 'Frequency');

        var location = new Array();
        var frequency = new Array();
        
        @foreach($array['data'] as $chartData)
            data.addRow(['{{ $chartData->technique }}', {{ (int)$chartData->count }}]);
        @endforeach
        /*for (i = 0; i < chartData.data.length; i++) {

            masterDataArray.push([chartData.data[i].answer, parseInt(chartData.data[i].count]));
        }*/

        data.addRow(['other', {{ (int)$array['other']['count'] }}]);
        
        var calmingColors = ["#E6EE9C", "#DCE775", "#D4E157", "#CDDC39", "#C0CA33", "#AFB42B", "#9E9D24", "#827717"];

        var options = {
            title: 'Calming Techniques',
            bars: 'horizontal',
            hAxis: {
                title: 'Count',
                //minValue: 0
            },
            vAxis: {
                title: 'Techniques'
            },
            
            colors: calmingColors;
        };

        var chart = new google.visualization.BarChart(document.getElementById('chart5'));

        chart.draw(data, options);
    }
</script>
<div id="chart5" style="width: 900px; height: 500px"></div>