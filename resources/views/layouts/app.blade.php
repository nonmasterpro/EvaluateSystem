<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Evaluate System</title>

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Mitr" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    

</head>
<body>

<div id="wrapper">
 <div id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <div class="sidebar-brand text-center headlogo">
                {{-- <img class="img2" src="{{ asset('img/Tecmove2.png') }}" alt="logo" > --}}
                Menu
         </div>
       @if (Auth::guest())
       <br>
        <span style="margin-left: 20px;">Hi Guest</span>
       @elseif (Auth::user())
        <li>
          <a class="current-parent current" href="/home" > <i class="fa fa-home"></i> <span class="menu_title"> Home</span></a>
        </li>
        <li>
          <a class="current-parent current" href="/user" > <i class="fa fa-check-square"></i> <span class="menu_title"> Evaluate</span></a>
        </li>
        <li>
          <a class="current-parent current" href="/report" > <i class="fa fa-file-text"></i> <span class="menu_title"> Report</span></a>
        </li>
        <li>
          <a class="current-parent current" href="user/{{Auth::user()->id}}/edituname" > <i class="fa fa-pencil-square-o"></i> <span class="menu_title"> Change Username</span></a>
        </li>
        @endif

        <div class="footer">
        
        Copyright @2017 Teerapong All rights reserved
            
        </div>
        

      </ul>
    </div>

    <div id="app">
        <nav class="navbar navbar-static-top navheadd">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>


                    <a style="color: white;" class="navbar-brand" href="#menu-toggle" id="menu-toggle">
                    <span class="fa fa-align-justify" aria-hidden="true"></span></a>


                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        Evaluate System
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}"><i class="fa fa-sign-in" aria-hidden="true"></i>
                             Login</a></li>
                            <li><a href="{{ route('register') }}"><i class="fa fa-user-plus" aria-hidden="true"></i> Register</a></li>
                        @else
                            <li><a href="/home"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                            <li><a href="/user"><i class="fa fa-check-square" aria-hidden="true"></i> Evaluate</a></li>
                            <li><a href="/report"><i class="fa fa-file-text" aria-hidden="true"></i> Report</a></li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                <li><a href="user/{{Auth::user()->id}}/edituname"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Change Username</a></li>

                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out" aria-hidden="true"></i>
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script>

          $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });

          $( document ).ready(function() {
          $('a[href*="http://www.amcharts.com/javascript-charts/"]').remove();
            });
    </script>
<style>
    .footer{
    position: absolute;
    top: 810px;
    font-size: 7px;
    margin-left: 3px;
}
.headlogo{
    background-color: #EF6924;
    height: 50px;
    font-size: 20px;
    color: white;
    /*border-bottom: solid white 0.5px;*/
    /*border-right: solid white 0.5px;*/
}
</style>
</body>
</html>
