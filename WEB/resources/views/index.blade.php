<!DOCTYPE html>
<html lang="en">

@if (Auth::guest())

<script>
    window.location.href = '/';
</script>

@else

<script>
    window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
</script>



<head>
    <title>StressLess</title>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.2/moment.js"></script>

    <!--jquery-->
    <script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
    <script src="https://cdn.rawgit.com/vast-engineering/jquery-popup-overlay/1.7.13/jquery.popupoverlay.js"></script>

    <!--added from MDL-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="img/favicon.png">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.blue-light_green.min.css">

    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/customStyle.css">

    <style>
        #view-source {
            position: fixed;
            display: block;
            right: 0;
            bottom: 0;
            margin-right: 40px;
            margin-bottom: 40px;
            z-index: 900;
        }
    </style>
    <!--end added from MDl-->


    <!--intial chart script will need to do onclick of each a tag reference-->

</head>

<body class="mdl-demo mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">

    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        @include('header')
        <main class="mdl-layout__content">

            <!--<div class="mdl-layout__tab-panel" id="tab3Ref">
                <section class="section--center mdl-grid mdl-grid--no-spacing" id="tab3Section">
                </section>
            </div>-->
            <div class="mdl-layout__tab-panel is-active" id="feedRef">
                <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp" id="feedSection">
                    <script>
                        $(document).ready(function () {
                            $('#feedSection').load('/feed');
                        });
                    </script>
                    <script>
                        $("#feed").click(function () {
                            $('#feedSection').load('/feed');
                        });
                    </script>
                </section>
            </div>
            <div class="mdl-layout__tab-panel" id="careNetworkRef">
                <section class="mdl-grid mdl-grid--no-spacing" id="careNetworkSection">

                    <aside class="mdl-components__nav docs-text-styling mdl-shadow--4dp">
                        <a class="mdl-components__link mdl-component">
                            <span class="mdl-list__item-primary-content">
                                <ul class="noDot">
                                    <li>
                                       @if (isset($mySurveys[0]))
                                            <a id="resetGraphs"><i class="material-icons mdl-list__item-icon">person</i>{{ $mySurveys[0]->user->personalInformation->firstName }} {{ $mySurveys[0]->user->personalInformation->lastName }}</a>
                                        @endif
                                    </li>

                                    @foreach ($surveys as $survey)
                                    <li>
                                        @if (isset($survey))
                                            <a id="clearDiv"><i class="material-icons mdl-list__item-icon">person</i>{{ $survey->user->personalInformation->firstName }} {{ $survey->user->personalInformation->lastName }}</a>
                                        @endif
                                    </li>
                                    @endforeach
                                </ul>
                            </span>
                        </a>
                    </aside>

                    <div id="chartHolder">
                       
                        <div id="networkChartDiv"></div>
                        
                        <img class="titleIcon" src="img/timing.png" alt="" /> <div class="gTitle">Timing and Duration</div>

                        <div id="chartDiv1"></div>

                        <!--<div id="selectionDiv1" style="display:none;">
                            <button id="dayButton1" class="chartNavButton">Day</button>
                            <button id="weekButton1" class="chartNavButton">Week</button>
                            <button id="monthButton1" class="chartNavButton">Month</button>
                            <button id="yearButton1" class="chartNavButton">Year</button>
                            <button id="allButton1" class="chartNavButton">All</button>
                        </div>-->
                        
                        <img class="titleIcon" src="img/location.png" alt="" /> <div class="gTitle">Location</div>

                        <div id="chartDiv2"></div>

                        <!--<div id="selectionDiv2" style="display:none;">
                            <button id="dayButton2" class="chartNavButton">Day</button>
                            <button id="weekButton2" class="chartNavButton">Week</button>
                            <button id="monthButton2" class="chartNavButton">Month</button>
                            <button id="yearButton2" class="chartNavButton">Year</button>
                            <button id="allButton2" class="chartNavButton">All</button>
                        </div>-->
                        
                        <img class="titleIcon" src="img/trigger.png" alt="" /> <div class="gTitle">Cause</div>

                        <div id="chartDiv3"></div>

                        <!--<div id="selectionDiv3" style="display:none;">
                            <button id="dayButton3" class="chartNavButton">Day</button>
                            <button id="weekButton3" class="chartNavButton">Week</button>
                            <button id="monthButton3" class="chartNavButton">Month</button>
                            <button id="yearButton3" class="chartNavButton">Year</button>
                            <button id="allButton3" class="chartNavButton">All</button>
                        </div>-->
                        
                        <img class="titleIcon" src="img/symptoms.png" alt="" /> <div class="gTitle">Symptoms</div>

                        <div id="chartDiv4"></div>

                        <!--<div id="selectionDiv4" style="display:none;">
                            <button id="dayButton4" class="chartNavButton">Day</button>
                            <button id="weekButton4" class="chartNavButton">Week</button>
                            <button id="monthButton4" class="chartNavButton">Month</button>
                            <button id="yearButton4" class="chartNavButton">Year</button>
                            <button id="allButton4" class="chartNavButton">All</button>
                        </div>-->
                        
                        <img class="titleIcon" src="img/relax.png" alt="" /> <div class="gTitle">Calming Techniques</div>

                        <div id="chartDiv5"></div>

                        <!--<div id="selectionDiv5" style="display:none;">
                            <button id="dayButton5" class="chartNavButton">Day</button>
                            <button id="weekButton5" class="chartNavButton">Week</button>
                            <button id="monthButton5" class="chartNavButton">Month</button>
                            <button id="yearButton5" class="chartNavButton">Year</button>
                            <button id="allButton5" class="chartNavButton">All</button>
                        </div>-->

                    </div>

                    <script>
                        $("#careNetwork").click(function () {
                            $('#networkChartDiv').hide();
                            $('#chartDiv1').load('/vis1');
                            $('#chartDiv2').load('/vis2');
                            $('#chartDiv3').load('/vis3');
                            $('#chartDiv4').load('/vis4');
                            $('#chartDiv5').load('/vis5');
                            $('#chartHolder').show();
                            /*$('#selectionDiv1').show();
                            $('#selectionDiv2').show();
                            $('#selectionDiv3').show();
                            $('#selectionDiv4').show();
                            $('#selectionDiv5').show();*/
                        });
                        $('#settings').click(function(){
                            $('#settingsSection').load('/settings');
                        });
                    </script>
                    
                    <script>
                        $("#resetGraphs").click(function () {
                            $('#chartHolder').show();
                            $("#careNetwork").click();
                        });
                    </script>
                    
                    <script>
                        $("#clearDiv").click(function () {
                            $('#chartHolder').hide();
                            $('#networkChartDiv').load('/networkVis');//LOAD NETWORK CHART
                            $('#networkChartDiv').show();
                        });
                    </script>

                </section>
            </div>
            <div class="mdl-layout__tab-panel" id="settingsRef">
                <section class="section--center mdl-grid mdl-grid--no-spacing" id="settingsSection">
                </section>
            </div>

            @include('footer')
        </main>
    </div>
    <script src="https://code.getmdl.io/1.2.1/material.min.js"></script>

</body>
@endif

</html>