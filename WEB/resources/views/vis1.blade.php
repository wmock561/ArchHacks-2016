<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawSeriesChart);

    function drawSeriesChart() {

        var data = new google.visualization.DataTable();

        data.addColumn('string', 'ID');
        data.addColumn('date', 'Date');
        data.addColumn('timeofday', 'Time of Day');
        data.addColumn('number', 'Severity');
        data.addColumn('number', 'Duration');

        var id = new Array();
        var date = new Array();
        var timeofDay = new Array();
        var severity = new Array();
        var duration = new Array();

        @foreach($mySurveys as $survey)
        
            //PARSE DATE AND TIME INTO 2 HERE
        
            var up = '{{ $survey->created_at }}';
            
            var parsed = up.split(' ');
        
            var dt = parsed[0];
            var time1 = parsed[1];
        
            id.push(dt);//can be string so good to leave
            
            //date manipulation here
            
            var dateArray = dt.split('-');
        
            var finalDateArray = new Date(parseInt(dateArray[0]),parseInt(dateArray[1])-1,parseInt(dateArray[2]));
        
            console.log(finalDateArray);
        
            date.push(finalDateArray);
        
            //time manipulation here
        
            var hms =  time1;  // your input string
            var a = hms.split(':'); // split it at the colons

            // minutes are worth 60 seconds. Hours are worth 60 minutes.
            var finalTimeArray = [parseInt(a[0]),parseInt(a[1]),parseInt(a[2])];
        
            console.log(finalTimeArray);
        
            timeofDay.push(finalTimeArray);
        
            //push for severity
            
            console.log({{$survey->question5_answers[0]->answer}});//FOUR
        
            severity.push({{$survey->question5_answers[0]->answer}});
        
            //push duration
        
            console.log({{$survey->question6_answers[0]->answer}});//FIVE
        
            duration.push({{$survey->question6_answers[0]->answer}});
        

        @endforeach

        for (i = 0; i < id.length; i++) {
            data.addRow([id[i], date[i], timeofDay[i], severity[i], duration[i]]);
        }
        
        var minDate = new Date();
        minDate.setDate(date[0].getDate()-5);
        
        var maxDate = new Date();
        maxDate.setDate(date[date.length-1].getDate()+5);
        
        console.log(data);
        

        var options = {
            title: 'Correlation between Date, Time of Day, duration and severity of Panic Attacks ',
            hAxis: {
                title: 'Date',
                format: 'M/d/yy',
                viewWindow: {
                    min: minDate,
                    max: maxDate
                }
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
    <div id="chart1" style="width: 900px; height: 500px"></div>