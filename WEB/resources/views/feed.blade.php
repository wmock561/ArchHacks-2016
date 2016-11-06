@foreach ($surveys as $survey)

<div class="mdl-card mdl-cell mdl-cell--12-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone" style="margin-bottom:20px;">
    <div class="mdl-card__supporting-text">
        <h4>{{ $survey->user->personalInformation->firstName }} {{ $survey->user->personalInformation->lastName }} shared data with you.</h4>{{ $survey->user->personalInformation->firstName }} has shared data about a severity {{$survey->question5_answers[0]->answer}} panic attack with you.
    </div>
    <div class="mdl-card__actions">
        <a class="mdl-button my_popup_open">View Now ></a>
        <!--can open a overlay with info about that survey?-->
    </div>

    <!-- Add content to the popup -->
    <div id="my_popup">

        <div>
            <h3>Results from {{ $survey->user->personalInformation->firstName }}</h3>

            <table align="center">
                <thead>
                    <tr>
                        <th>Location</th>
                        <th>Cause</th>
                        <th>Symptom</th>
                        <th>Calming Method</th>
                        <th>Severity</th>
                        <th>Duration</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$survey->question1_answers[0]->answer}}</td>
                        <td>{{$survey->question2_answers[0]->answer}}</td>
                        <td>{{$survey->question3_answers[0]->answer}}</td>
                        <td>{{$survey->question4_answers[0]->answer}}</td>
                        <td>{{$survey->question5_answers[0]->answer}}</td>
                        <td>{{$survey->question6_answers[0]->answer}}</td>
                    </tr>
                </tbody>
            </table>

            <button align="center" class="my_popup_close"><img src="img/close.png" class="close" alt="close"></button>
        </div>

    </div>

    <script>
        $(document).ready(function () {

            // Initialize the plugin
            $('#my_popup').popup();

        });
    </script>
</div>
@endforeach