<script type="text/javascript">
    google.charts.load('current', {packages: ['corechart', 'bar']});
    google.charts.setOnLoadCallback(drawBarChart);

    function drawBasic() {

        var data = google.visualization.arrayToDataTable([
        ['City', '2010 Population', ],
        ['New York City, NY', 8175000],
        ['Los Angeles, CA', 3792000],
        ['Chicago, IL', 2695000],
        ['Houston, TX', 2099000],
        ['Philadelphia, PA', 1526000]
      ]);

        var options = {
            title: 'Symptoms',
            hAxis: {
                title: 'Total Population',
                minValue: 0
            },
            vAxis: {
                title: 'City'
            }
        };

        var chart = new google.visualization.BarChart(document.getElementById('chart4'));

        chart.draw(data, options);
    }
    
    
    
    
    
    function drawBarChart() {

        var symptom = new Array();
        var numCount = new Array();

        var masterDataArray = new Array();

        masterDataArray.push(['Symptom', 'Frequency']);
        
        @foreach($array['data'] as $chartData)
            masterDataArray.push([ '{{ $chartData->symptom }}', {{ (int)$chartData->count }} ]);
        @endforeach
        /*for (i = 0; i < chartData.data.length; i++) {

            masterDataArray.push([chartData.data[i].answer, parseInt(chartData.data[i].count]));
        }*/

        masterDataArray.push(['other', {{ (int)$array["other"]->count }} ]);

        console.log(masterDataArray);

        var masterData = google.visualization.arrayToDataTable([masterDataArray]);

        console.log(masterData);

        var options = {
            title: 'Symptom',
            hAxis: {
                title: 'Count',
                minValue: 0
            },
            vAxis: {
                title: 'Symptoms'
            }
        };

        var chart = new google.visualization.BarChart(document.getElementById('chart4'));

        chart.draw(masterData, options);
    }
</script>
<div id="chart4" style="width: 900px; height: 500px"></div>