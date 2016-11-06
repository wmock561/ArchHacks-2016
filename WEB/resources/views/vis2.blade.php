<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(getData);
    
    function getData(){
    
        $.get("/location", function (data) {
            
            console.log(data);
            
            var parsed = JSON.parse(data);

            console.log(parsed);
            
            drawChart(parsed);

        });
         
        
        
    }


    function drawChart(chartData) {

        var masterData = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Work', 11],
          ['Eat', 2],
          ['Commute', 2],
          ['Watch TV', 2],
          ['Sleep', 7]
        ]);

        var options = {
            title: 'Location'
        };

        var chart = new google.visualization.PieChart(document.getElementById('chart2'));

        chart.draw(masterData, options);
    }
</script>
<div id="chart2" style="width: 900px; height: 500px"></div>