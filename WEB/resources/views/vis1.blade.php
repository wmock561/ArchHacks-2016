<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawSeriesChart);

    function drawSeriesChart() {

        var data = new google.visualization.DataTable();

        data.addColumn('string', 'ID');
        data.addColumn('number', 'Date');
        data.addColumn('number', 'Time of Day');
        data.addColumn('number', 'Severity');
        data.addColumn('number', 'Duration');

        var id = new Array();
        var date = new Array();
        var timeofDay = new Array();
        var severity = new Array();
        var duration = new Array();

        @foreach($mySurveys as $survey)
        
            //PARSE DATE AND TIME INTO 2 HERE
        
            
    
            console.log( '{{ $survey->created_at }}' );
            //var time = ???;
        
            //id.push(LARAVEL $survey->created_at }});//can be string so good to leave
            
            //date manipulation here
            /*var ts = moment( LARAVEL , "M/D/YYYY").valueOf();
            var m = moment(ts);
            var s = m.format("M/D/YYYY H:mm");

            console.log(ts);
            console.log(s);
        
            date.push();//TODO
        
            //time manipulation here
        
            var hms =  LARAVEL  // your input string
            var a = hms.split(':'); // split it at the colons

            // minutes are worth 60 seconds. Hours are worth 60 minutes.
            var seconds = (+a[0]) * 60 * 60 + (+a[1]) * 60 + (+a[2]); 

            console.log(seconds);
        
            timeofDay.push();
            severity.push();
            duration.push();*/

        @endforeach

        for (i = 0; i < id.length; i++) {
            data.addRow([id[i], Date[i], timeofDay[i], severity[i], duration[i]]);
        }
        

        var options = {
            title: 'Correlation between Date, Time of Day, duration and severity of Panic Attacks ',
            hAxis: {
                title: 'Date'
            },
            vAxis: {
                title: 'Time of Day'
            },
            bubble: {
                textStyle: {
                    fontSize: 11
                }
            },
            colorAxis: {
                colors: ['yellow', 'red']
            }
        };

        var chart = new google.visualization.BubbleChart(document.getElementById('chart1'));
        chart.draw(data, options);
    }
</script>
<?php
    echo "The time is " . date("h:i:sa");
?>
    <div id="chart1" style="width: 900px; height: 500px"></div>