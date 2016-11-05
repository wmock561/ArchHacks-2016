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
    <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.deep_purple-pink.min.css">

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

    @yield('topTabContent')

    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header mdl-layout__header--scroll mdl-color--primary">
            <div class="mdl-layout--large-screen-only mdl-layout__header-row">
            </div>
            <div class="mdl-layout--large-screen-only mdl-layout__header-row">
                <h3>Name &amp; Title</h3>
            </div>
            <div class="mdl-layout--large-screen-only mdl-layout__header-row">
            </div>
            <div class="mdl-layout__tab-bar mdl-js-ripple-effect mdl-color--primary-dark">
                <a href="#overview" class="mdl-layout__tab is-active">Feed</a>
                <a href="#features" class="mdl-layout__tab">Features</a>
                <a href="#features" class="mdl-layout__tab">Details</a>
                <a href="#features" class="mdl-layout__tab">Technology</a>
                <a href="#features" class="mdl-layout__tab">FAQ</a>
                <!--button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored mdl-shadow--4dp mdl-color--accent" id="add">
                    <i class="material-icons" role="presentation">add</i>
                    <span class="visuallyhidden">Add</span>
                </button>-->
            </div>
        </header>
        <main class="mdl-layout__content">
            <div class="mdl-layout__tab-panel is-active" id="overview">
                <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
                    <header class="section__play-btn mdl-cell mdl-cell--3-col-desktop mdl-cell--2-col-tablet mdl-cell--4-col-phone mdl-color--teal-100 mdl-color-text--white">
                        <i class="material-icons">play_circle_filled</i>
                    </header>
                    <div class="mdl-card mdl-cell mdl-cell--9-col-desktop mdl-cell--6-col-tablet mdl-cell--4-col-phone">
                        <div class="mdl-card__supporting-text">
                            <h4>Features</h4> Dolore ex deserunt aute fugiat aute nulla ea sunt aliqua nisi cupidatat eu. Nostrud in laboris labore nisi amet do dolor eu fugiat consectetur elit cillum esse.
                        </div>
                        <div class="mdl-card__actions">
                            <a href="#" class="mdl-button">Read our features</a>
                        </div>
                    </div>
                    <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="btn1">
                        <i class="material-icons">more_vert</i>
                    </button>
                    <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right" for="btn1">
                        <li class="mdl-menu__item">Lorem</li>
                        <li class="mdl-menu__item" disabled>Ipsum</li>
                        <li class="mdl-menu__item">Dolor</li>
                    </ul>
                </section>
                <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
                    <div class="mdl-card mdl-cell mdl-cell--12-col">
                        <div class="mdl-card__supporting-text mdl-grid mdl-grid--no-spacing">
                            <h4 class="mdl-cell mdl-cell--12-col">Details</h4>
                            <div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
                                <div class="section__circle-container__circle mdl-color--primary"></div>
                            </div>
                            <div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
                                <h5>Lorem ipsum dolor sit amet</h5> Dolore ex deserunt aute fugiat aute nulla ea sunt aliqua nisi cupidatat eu. Duis nulla tempor do aute et eiusmod velit exercitation nostrud quis <a href="#">proident minim</a>.
                            </div>
                            <div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
                                <div class="section__circle-container__circle mdl-color--primary"></div>
                            </div>
                            <div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
                                <h5>Lorem ipsum dolor sit amet</h5> Dolore ex deserunt aute fugiat aute nulla ea sunt aliqua nisi cupidatat eu. Duis nulla tempor do aute et eiusmod velit exercitation nostrud quis <a href="#">proident minim</a>.
                            </div>
                            <div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
                                <div class="section__circle-container__circle mdl-color--primary"></div>
                            </div>
                            <div class="section__text mdl-cell mdl-cell--10-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
                                <h5>Lorem ipsum dolor sit amet</h5> Dolore ex deserunt aute fugiat aute nulla ea sunt aliqua nisi cupidatat eu. Duis nulla tempor do aute et eiusmod velit exercitation nostrud quis <a href="#">proident minim</a>.
                            </div>
                        </div>
                        <div class="mdl-card__actions">
                            <a href="#" class="mdl-button">Read our features</a>
                        </div>
                    </div>
                    <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="btn2">
                        <i class="material-icons">more_vert</i>
                    </button>
                    <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right" for="btn2">
                        <li class="mdl-menu__item">Lorem</li>
                        <li class="mdl-menu__item" disabled>Ipsum</li>
                        <li class="mdl-menu__item">Dolor</li>
                    </ul>
                </section>
                <section class="section--center mdl-grid mdl-grid--no-spacing mdl-shadow--2dp">
                    <div class="mdl-card mdl-cell mdl-cell--12-col">
                        <div class="mdl-card__supporting-text">
                            <h4>Technology</h4> Dolore ex deserunt aute fugiat aute nulla ea sunt aliqua nisi cupidatat eu. Nostrud in laboris labore nisi amet do dolor eu fugiat consectetur elit cillum esse. Pariatur occaecat nisi laboris tempor laboris eiusmod qui id Lorem esse commodo in. Exercitation aute dolore deserunt culpa consequat elit labore incididunt elit anim.
                        </div>
                        <div class="mdl-card__actions">
                            <a href="#" class="mdl-button">Read our features</a>
                        </div>
                    </div>
                    <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="btn3">
                        <i class="material-icons">more_vert</i>
                    </button>
                    <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right" for="btn3">
                        <li class="mdl-menu__item">Lorem</li>
                        <li class="mdl-menu__item" disabled>Ipsum</li>
                        <li class="mdl-menu__item">Dolor</li>
                    </ul>
                </section>
                <section class="section--footer mdl-color--white mdl-grid">
                    <div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
                        <div class="section__circle-container__circle mdl-color--accent section__circle--big"></div>
                    </div>
                    <div class="section__text mdl-cell mdl-cell--4-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
                        <h5>Lorem ipsum dolor sit amet</h5> Qui sint ut et qui nisi cupidatat. Reprehenderit nostrud proident officia exercitation anim et pariatur ex.
                    </div>
                    <div class="section__circle-container mdl-cell mdl-cell--2-col mdl-cell--1-col-phone">
                        <div class="section__circle-container__circle mdl-color--accent section__circle--big"></div>
                    </div>
                    <div class="section__text mdl-cell mdl-cell--4-col-desktop mdl-cell--6-col-tablet mdl-cell--3-col-phone">
                        <h5>Lorem ipsum dolor sit amet</h5> Qui sint ut et qui nisi cupidatat. Reprehenderit nostrud proident officia exercitation anim et pariatur ex.
                    </div>
                </section>
            </div>
            <div class="mdl-layout__tab-panel" id="features">
                <section class="section--center mdl-grid mdl-grid--no-spacing">
                    
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