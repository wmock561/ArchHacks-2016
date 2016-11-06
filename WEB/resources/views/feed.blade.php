@foreach ($surveys as $survey)

<div class="mdl-card mdl-cell mdl-cell--12-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
    <div class="mdl-card__supporting-text">
        <h4>{{ $survey->user->personalInformation->firstName }} {{ $survey->user->personalInformation->lastName }} shared data with you.</h4> Summary of data here? Dolore ex deserunt aute fugiat aute nulla ea sunt aliqua nisi cupidatat eu. Nostrud in laboris labore nisi amet do dolor eu fugiat consectetur elit cillum esse.
    </div>
    <div class="mdl-card__actions">
        <a class="mdl-button my_popup_open">View Now ></a>
        <!--can open a overlay with info about that survey?-->
    </div>

    <!-- Add content to the popup -->
    <div id="my_popup">

        <div>
            <h3>Test</h3>

            <table>
                <tr>
                    <th>Location</th>
                    <th>Cause</th>
                    <th>Symptom</th>
                    <th>Calming Method</th>
                    <th>Severity</th>
                    <th>Duration</th>
                </tr>
                <tr>
                    <td>{{$survey->question1_answers[0]->answer}}</td>
                    <td>{{$survey->question2_answers[0]->answer}}</td>
                    <td>{{$survey->question3_answers[0]->answer}}</td>
                    <td>{{$survey->question4_answers[0]->answer}}</td>
                    <td>{{$survey->question5_answers[0]->answer}}</td>
                    <td>{{$survey->question6_answers[0]->answer}}</td>
                </tr>
                <tr>
                    <td>Eve</td>
                    <td>Jackson</td>
                    <td>94</td>
                </tr>
            </table>

            <p>Dolore ex deserunt aute fugiat aute nulla ea sunt aliqua nisi cupidatat eu. Nostrud in laboris labore nisi amet do dolor eu fugiat consectetur elit cillum esse.</p>
            <button class="my_popup_close">Close</button>
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