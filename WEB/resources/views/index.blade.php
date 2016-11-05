<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>

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



</head>

<body class="mdl-demo mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">

    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header mdl-layout__header--scroll mdl-color--primary">
            <div class="mdl-layout--large-screen-only mdl-layout__header-row">
            </div>
            <div class="mdl-layout--large-screen-only mdl-layout__header-row">
                <img src="" alt="LOGO" id="logo">
                <h3>StressLess</h3>
            </div>
            <div class="mdl-layout--large-screen-only mdl-layout__header-row">
            </div>
            <div class="mdl-layout__tab-bar mdl-js-ripple-effect mdl-color--primary-dark">
                <a href="#feedRef" class="mdl-layout__tab is-active" id="feed">Feed</a>
                <a href="#careNetworkRef" class="mdl-layout__tab" id="careNetwork">Care Network</a>
                <a href="#tab3Ref" class="mdl-layout__tab" id="tab3">Tab 3</a>
                <a href="#settingsRef" class="mdl-layout__tab" id="settings">Settings</a>
            </div>
        </header>
        <main class="mdl-layout__content">
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
                        <a href="#badges-section" class="mdl-components__link mdl-component badges">
                            <div class="mdl-components__link-image" style="background-image: url('../assets/comp_badges.png')">
                            </div>
                            <span class="mdl-components__link-text">Badges</span>
                        </a>

                        <a href="#buttons-section" class="mdl-components__link mdl-component buttons">
                            <div class="mdl-components__link-image" style="background-image: url('../assets/comp_buttons.png')">
                            </div>
                            <span class="mdl-components__link-text">Buttons</span>
                        </a>

                        <a href="#cards-section" class="mdl-components__link mdl-component cards">
                            <div class="mdl-components__link-image" style="background-image: url('../assets/comp_cards.png')">
                            </div>
                            <span class="mdl-components__link-text">Cards</span>
                        </a>

                        <a href="#chips-section" class="mdl-components__link mdl-component chips">
                            <div class="mdl-components__link-image" style="background-image: url('../assets/comp_chips.png')">
                            </div>
                            <span class="mdl-components__link-text">Chips</span>
                        </a>

                        <a href="#dialog-section" class="mdl-components__link mdl-component dialog">
                            <div class="mdl-components__link-image" style="background-image: url('../assets/comp_dialog.png')">
                            </div>
                            <span class="mdl-components__link-text">Dialogs</span>
                        </a>

                        <a href="#layout-section" class="mdl-components__link mdl-component layout">
                            <div class="mdl-components__link-image" style="background-image: url('../assets/comp_layout.png')">
                            </div>
                            <span class="mdl-components__link-text">Layout</span>
                        </a>

                        <a href="#lists-section" class="mdl-components__link mdl-component lists">
                            <div class="mdl-components__link-image" style="background-image: url('../assets/comp_lists.png')">
                            </div>
                            <span class="mdl-components__link-text">Lists</span>
                        </a>

                        <a href="#loading-section" class="mdl-components__link mdl-component loading">
                            <div class="mdl-components__link-image" style="background-image: url('../assets/comp_loading.png')">
                            </div>
                            <span class="mdl-components__link-text">Loading</span>
                        </a>

                        <a href="#menus-section" class="mdl-components__link mdl-component menus">
                            <div class="mdl-components__link-image" style="background-image: url('../assets/comp_menus.png')">
                            </div>
                            <span class="mdl-components__link-text">Menus</span>
                        </a>

                        <a href="#sliders-section" class="mdl-components__link mdl-component sliders">
                            <div class="mdl-components__link-image" style="background-image: url('../assets/comp_sliders.png')">
                            </div>
                            <span class="mdl-components__link-text">Sliders</span>
                        </a>

                        <a href="#snackbar-section" class="mdl-components__link mdl-component snackbar">
                            <div class="mdl-components__link-image" style="background-image: url('../assets/comp_snackbar.png')">
                            </div>
                            <span class="mdl-components__link-text">Snackbar</span>
                        </a>

                        <a href="#toggles-section" class="mdl-components__link mdl-component toggles">
                            <div class="mdl-components__link-image" style="background-image: url('../assets/comp_toggles.png')">
                            </div>
                            <span class="mdl-components__link-text">Toggles</span>
                        </a>

                        <a href="#tables-section" class="mdl-components__link mdl-component tables">
                            <div class="mdl-components__link-image" style="background-image: url('../assets/comp_tables.png')">
                            </div>
                            <span class="mdl-components__link-text">Tables</span>
                        </a>

                        <a href="#textfields-section" class="mdl-components__link mdl-component textfields">
                            <div class="mdl-components__link-image" style="background-image: url('../assets/comp_textfields.png')">
                            </div>
                            <span class="mdl-components__link-text">Text Fields</span>
                        </a>

                        <a href="#tooltips-section" class="mdl-components__link mdl-component tooltips">
                            <div class="mdl-components__link-image" style="background-image: url('../assets/comp_tooltips.png')">
                            </div>
                            <span class="mdl-components__link-text">Tooltips</span>
                        </a>
                    </aside>


                    <!--<ul class="demo-list-icon mdl-list">
                        <li class="mdl-list__item">
                            <span class="mdl-list__item-primary-content">
                                <i class="material-icons mdl-list__item-icon">person</i>Bryan Cranston
                            </span>
                        </li>
                        <li class="mdl-list__item">
                            <span class="mdl-list__item-primary-content">
                               <i class="material-icons mdl-list__item-icon">person</i>Aaron Paul
                            </span>
                        </li>
                        <li class="mdl-list__item">
                            <span class="mdl-list__item-primary-content">
                                <i class="material-icons mdl-list__item-icon">person</i>Bob Odenkirk
                            </span>
                        </li>
                    </ul>-->

                </section>
            </div>
            <div class="mdl-layout__tab-panel" id="tab3Ref">
                <section class="section--center mdl-grid mdl-grid--no-spacing" id="tab3Section">
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

</html>