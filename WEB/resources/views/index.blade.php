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

    <link rel="shortcut icon" href="images/favicon.png">

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
        <header class="mdl-layout__header mdl-layout__header--scroll mdl-color--primary">

            <div class="mdl-layout--large-screen-only mdl-layout__header-row headerSize"></div>

            <div class="mdl-layout--large-screen-only mdl-layout__header-row">
                <div class="mdl-cell mdl-cell--6-col">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="img/Asset_5.png" alt="LOGO" id="logo" class="logo">
                    </a>
                </div>

                <div class="mdl-cell mdl-cell--5-col"></div>

                <div class="mdl-cell mdl-cell--1-col">

                    <a href="{{ url('/logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>

            </div>

            <div class="mdl-layout--large-screen-only mdl-layout__header-row headerSize"></div>

            <div class="mdl-layout__tab-bar mdl-js-ripple-effect mdl-color--primary-dark">
                <!--<a href="#tab3Ref" class="mdl-layout__tab" id="tab3">Overview</a>-->
                <a href="#feedRef" class="mdl-layout__tab is-active" id="feed">Feed</a>
                <a href="#careNetworkRef" class="mdl-layout__tab" id="careNetwork">Care Network</a>
                <a href="#settingsRef" class="mdl-layout__tab" id="settings">Settings</a>
            </div>
        </header>
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
                                       @if ( {{ isset($mySurveys) }} )
                                            <i class="material-icons mdl-list__item-icon">person</i>{{ $mySurveys[0]->user->personalInformation->firstName }} {{ $mySurveys[0]->user->personalInformation->lastName }}
                                        @endif
                                    </li>

                                    @foreach ($surveys as $survey)
                                    <li>
                                        @if ( {{ isset($survey) }} )
                                            <i class="material-icons mdl-list__item-icon">person</i>{{ $survey->user->personalInformation->firstName }} {{ $survey->user->personalInformation->lastName }}
                                        @endif
                                    </li>
                                    @endforeach
                                </ul>
                            </span>
                        </a>
                    </aside>

                    <div id="chartHolder">

                        <div id="chartDiv1"></div>

                        <div id="selectionDiv1" style="display:none;">
                            <button id="dayButton1" class="chartNavButton">Day</button>
                            <button id="weekButton1" class="chartNavButton">Week</button>
                            <button id="monthButton1" class="chartNavButton">Month</button>
                            <button id="yearButton1" class="chartNavButton">Year</button>
                            <button id="allButton1" class="chartNavButton">All</button>
                        </div>

                        <div id="chartDiv2"></div>

                        <div id="selectionDiv2" style="display:none;">
                            <button id="dayButton2" class="chartNavButton">Day</button>
                            <button id="weekButton2" class="chartNavButton">Week</button>
                            <button id="monthButton2" class="chartNavButton">Month</button>
                            <button id="yearButton2" class="chartNavButton">Year</button>
                            <button id="allButton2" class="chartNavButton">All</button>
                        </div>

                        <div id="chartDiv3"></div>

                        <div id="selectionDiv3" style="display:none;">
                            <button id="dayButton3" class="chartNavButton">Day</button>
                            <button id="weekButton3" class="chartNavButton">Week</button>
                            <button id="monthButton3" class="chartNavButton">Month</button>
                            <button id="yearButton3" class="chartNavButton">Year</button>
                            <button id="allButton3" class="chartNavButton">All</button>
                        </div>

                    </div>

                    <script>
                        $("#careNetwork").click(function () {
                            $('#chartDiv1').load('/vis1');
                            $('#selectionDiv1').show();
                            $('#chartDiv2').load('/vis2');
                            $('#selectionDiv2').show();
                            $('#chartDiv3').load('/vis3');
                            $('#selectionDiv3').show();
                        });
                    </script>

                </section>
            </div>
            <div class="mdl-layout__tab-panel" id="settingsRef">
                <section class="section--center mdl-grid mdl-grid--no-spacing" id="settingsSection">
                </section>
            </div>

            <footer class="mdl-mega-footer">
                <div class="mdl-mega-footer--middle-section">
                    <div class="mdl-mega-footer--drop-down-section">
                        <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
                        <h1 class="mdl-mega-footer--heading">Features</h1>
                        <ul class="mdl-mega-footer--link-list">
                            <li><a href="#">About</a></li>
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">Partners</a></li>
                            <li><a href="#">Updates</a></li>
                        </ul>
                    </div>
                    <div class="mdl-mega-footer--drop-down-section">
                        <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
                        <h1 class="mdl-mega-footer--heading">Details</h1>
                        <ul class="mdl-mega-footer--link-list">
                            <li><a href="#">Spec</a></li>
                            <li><a href="#">Tools</a></li>
                            <li><a href="#">Resources</a></li>
                        </ul>
                    </div>
                    <div class="mdl-mega-footer--drop-down-section">
                        <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
                        <h1 class="mdl-mega-footer--heading">Technology</h1>
                        <ul class="mdl-mega-footer--link-list">
                            <li><a href="#">How it works</a></li>
                            <li><a href="#">Patterns</a></li>
                            <li><a href="#">Usage</a></li>
                            <li><a href="#">Products</a></li>
                            <li><a href="#">Contracts</a></li>
                        </ul>
                    </div>
                    <div class="mdl-mega-footer--drop-down-section">
                        <input class="mdl-mega-footer--heading-checkbox" type="checkbox" checked>
                        <h1 class="mdl-mega-footer--heading">FAQ</h1>
                        <ul class="mdl-mega-footer--link-list">
                            <li><a href="#">Questions</a></li>
                            <li><a href="#">Answers</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="mdl-mega-footer--bottom-section">
                    <div class="mdl-logo">
                        More Information
                    </div>
                    <ul class="mdl-mega-footer--link-list">
                        <li><a href="https://developers.google.com/web/starter-kit/">Web Starter Kit</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Privacy and Terms</a></li>
                    </ul>
                </div>
            </footer>
        </main>
    </div>
    <script src="https://code.getmdl.io/1.2.1/material.min.js"></script>

</body>
@endif

</html>