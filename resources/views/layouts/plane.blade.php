<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
    <meta charset="utf-8"/>
    <title>SB Admin v2.0 in Laravel 5</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>

    <link rel="stylesheet" href="{{ asset("assets/stylesheets/vendor/bootstrap.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/stylesheets/vendor/bootstrap-datepicker.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/stylesheets/vendor/font-awesome.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/stylesheets/vendor/themify-icons.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/stylesheets/vendor/fullcalendar.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/stylesheets/vendor/jquery.dataTables.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/stylesheets/vendor/perfect-scrollbar.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/stylesheets/vendor/sparkline.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/stylesheets/dashboard/index.css") }}" />
</head>
<body class="app">
      
    @yield('body')
  
    <!-- Scripts -->
    <script src="{{ asset("assets/scripts/vendor/jquery.js") }}" type="text/javascript"></script>
    <script src="{{ asset("assets/scripts/vendor/bootstrap.js") }}" type="text/javascript"></script>
    <script src="{{ asset("assets/scripts/vendor/popper.js") }}" type="text/javascript"></script>
    <script src="{{ asset("assets/scripts/dashboard/index.js") }}" type="text/javascript"></script>
</body>
</html>


