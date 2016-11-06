@foreach ($surveys as $survey)

<div class="mdl-card mdl-cell mdl-cell--12-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
    <div class="mdl-card__supporting-text">
        <h4>{{ $survey->user->personalInformation->firstName }} {{ $survey->user->personalInformation->lastName }} shared data with you.</h4> Summary of data here? Dolore ex deserunt aute fugiat aute nulla ea sunt aliqua nisi cupidatat eu. Nostrud in laboris labore nisi amet do dolor eu fugiat consectetur elit cillum esse.
    </div>
    <div class="mdl-card__actions">
        <a href="#" class="mdl-button">View Now</a>
        <button class="my_popup_open">Open popup</button>
        <!--can open a overlay with info about that survey?-->
    </div>

    <!-- Add content to the popup -->
    <div id="my_popup">

        <div class="popupStyle">
           <h3>Test</h3>
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