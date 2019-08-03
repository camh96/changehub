<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" >
    <title>New Trips</title>
    <meta name="description" content="">
    <meta name="author" content="Cam Hovell">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="img/ico" href="{{ asset('img/ch-logo.png') }}">

    <link rel="stylesheet" href="//bootswatch.com/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <style>
      body {
        padding-top: 90px;
        padding-bottom: 20px;
      }
    </style>
    
    

    <script src="{{ asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
  </head>
  <body>
  <div id="wrap">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>  
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">
                    <img src="{{ asset('img/logo.png') }}" alt="">
                </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">

          <ul class="nav navbar-nav">
            <li class="{{ Route::currentRouteName() === 'home' ? 'active' : null }}"><a href="{{ route('home') }}">Home</a></li>
            <li class="{{ Route::currentRouteName() === 'about' ? 'active' : null }}"><a href="{{ route('about') }}">About</a></li>
          </ul>
  

          <ul class="nav navbar-nav navbar-right">
            @if(Auth::check())
              <li><a href="{{ route('dashboard') }}">Welcome back, {{ Auth::user()->fname}} {{ Auth::user()->lname}}.</a></li>
              <li><a href="{{ route('auth.logout') }}">Logout</a></li>
         
            @else
              <li><a href="{{ route('auth.register') }}">Register</a></li>
              <li><a href="{{ route('auth.login') }}">Login</a></li>
            @endif
          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>


    @yield('content')


    @foreach(['success', 'info', 'warning', 'danger'] as $level)
      @if(session("status.$level"))
        <div class="container">
          <div class="alert alert-{{ $level }}">
            <p>{{ session("status.$level") }}</p>
          </div>
        </div>
      @endif
    @endforeach

</div>
</div>

<div class="container">
<hr>

<div class="footer">
<p class="text-muted">&copy; ChangeHub. All Rights Reserved <?php echo date("Y") ?></p>
<img width="200" src="{{ asset('img/ecanlogo.png') }}" class="img-responsive" alt="Environment Canterbury Logos">
</div>
</div>

<!-- Web Development by Cam Hovell  -->
    
    

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="{{ asset('js/vendor/jquery-1.11.2.min.js') }}"><\/script>')</script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.maskedinput.min.js') }}"></script>
      <script type="text/javascript">
         jQuery(function($){
   $("#flybuys").mask("6014-9999-9999-9999",{placeholder:"6014-0000-0000-0000"});
   $("#phones").mask("");});
   $("#start-time").mask("99:99 am",{placeholder:"09:00 am"});
   $("#end-time").mask("99:99 am",{placeholder:"05:00 pm"});
   $(function () {
    $('[data-toggle="tooltip"]').tooltip()})

      </script>
    <script src="{{ asset('js/main.js') }}"></script>
  </body>
</html>
