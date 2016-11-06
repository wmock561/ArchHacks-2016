<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">

    <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.blue-light_green.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>StressLess</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <link rel="stylesheet" type="text/css" href="/css/customStyles.css">
    


    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <!--add-ons-->


</head>

<body>
    <div id="app" >
        <header class="mdl-layout__header mdl-layout__header--scroll mdl-color--primary">
            
            <div class="mdl-layout--large-screen-only mdl-layout__header-row headerSize"></div>

            <div class="mdl-layout--large-screen-only mdl-layout__header-row">
               <div class="mdl-cell mdl-cell--6-col">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="img/Asset_5.png" alt="LOGO" id="logo" class="logo">
                </a>
                </div>
                
                <div class="mdl-cell mdl-cell--5-col"></div>

            
                <div class="holder">

                @if (Auth::guest())
                <div class="mdl-cell mdl-cell--1-col"><img src="img/login.png" alt="login" class="loginIcon"><button onclick="window.location.href='/login'">Login</button></div>
                <div class="mdl-cell mdl-cell--1-col"><img src="img/register.png" alt="re" class="registerIcon"><button onclick="window.location.href='/register'">Register</button></div>
                @else
                <script>
                    window.location.href = '/index';
                </script>
                @endif
                
                </div> 

            </div>
            
            <div class="mdl-layout--large-screen-only mdl-layout__header-row headerSize"></div>

        </header>


        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>

</html>