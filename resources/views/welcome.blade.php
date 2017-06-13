<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="./assets/css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Montserrat:700|Amatic+SC' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                


        <!-- Styles -->
        <style>
           /* html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }*/

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #fff;
                padding: 0 25px;
                font-size: 14px;
                font-weight: 300;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                font-family:monospace; 

            }

            .m-b-md {
                margin-bottom: 30px;
            }

            body {
                  font-family: 'Montserrat', sans-serif;
                  background-color: #3C4254;
                  color: #636b6f;

                }
                .clip-text {
                  font-size: 90px;
                  font-weight: bold;
                  position: relative;
                  display: inline-block;
                  margin: .25em;
                  padding: .5em .75em;
                  text-align: center;
                  color: #ffffff;
                  -webkit-background-clip: text;
                  -webkit-text-fill-color: transparent;
                  -moz-background-clip: text;
                  -moz-text-fill-color: transparent;
                  -ms-background-clip: text;
                  -ms-text-fill-color: transparent;
                  background-clip: text;
                  text-fill-color: transparent;
                }

                .clip-text:before,
                .clip-text:after {
                  position: absolute;
                  content: '';
                }

                .clip-text:before {
                  z-index: -2;
                  top: 0;
                  right: 0;
                  bottom: 0;
                  left: 0;
                  background-image: inherit;
                  background-size: cover;
                  -webkit-animation:anim 3s infinite ease-in;
                  -moz-animation:anim 3s infinite ease-in;
                  -ms-animation:anim 3s infinite ease-in;
                  animation:anim 3s infinite ease-in;
                }

                .clip-text:after {
                  position: absolute;
                  z-index: -1;
                  top: .125em;
                  right: .125em;
                  bottom: .125em;
                  left: .125em;
                  background-color: #3C4254;
                }

                .clip-text_one {
                  background-image:url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/173024/wallpaper.jpg);
                  background-size: cover;
                  -webkit-animation:anim 3s infinite linear;
                  -moz-animation:anim 3s infinite ease-in;
                  -ms-animation:anim 3s infinite ease-in;
                  animation:anim 3s infinite ease-in;
                }

                @-webkit-keyframes anim
                {0%{background-position: top;}50%{background-position: bottom;}100%{background-position: top;}}
                @-moz-keyframes anim
                {0%{background-position: top;}50%{background-position: bottom;}100%{background-position: top;}}
                @-ms-keyframes anim
                {0%{background-position: top;}50%{background-position: bottom;}100%{background-position: top;}}
                @keyframes anim
                {0%{background-position: top;}50%{background-position: bottom;}100%{background-position: top;}}
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                    @else
                        <a href="{{ url('/login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
                        <a href="{{ url('/register') }}"><i class="fa fa-user-plus" aria-hidden="true"></i> Register</a>
                    @endif
                </div>
            @endif

           {{--  <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div> --}}

            <div align="center">
                  <div style="background-color: #3C4254;" class="clip-text clip-text_one">EVALUATE SYSTEM</div>
            </div>


        </div>
    </body>
</html>
