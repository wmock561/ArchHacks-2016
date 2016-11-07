<header class="mdl-layout__header mdl-layout__header--scroll mdl-color--primary">

            <div class="mdl-layout--large-screen-only mdl-layout__header-row headerSize"></div>

            <div class="mdl-layout--large-screen-only mdl-layout__header-row">
                <div class="mdl-cell mdl-cell--6-col">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="img/Asset_5.png" alt="LOGO" id="logo" class="logo">
                    </a>
                </div>

                <div class="mdl-cell mdl-cell--5-col"></div>

                <div class="mdl-cell mdl-cell--1-col logout">
                    
                    <img class="logoutIcon" src="img/logout.png" alt="logout" />

                    <a href="{{ url('/logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout
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