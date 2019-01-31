<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Colorlib App - App Landing Page</title>

    <!-- Favicon -->
    <!-- <link rel="icon" href="img/core-img/favicon.ico"> -->

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{ asset("assets/stylesheets/vendor/bootstrap.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/stylesheets/vendor/themify-icons.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/stylesheets/vendor/animate.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/stylesheets/vendor/magnific-popup.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/stylesheets/vendor/owl.carousel.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/stylesheets/vendor/responsive.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/stylesheets/vendor/slick.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/stylesheets/landing/index.css") }}" />
</head>

<body>
    <!-- Preloader Start -->
    <!-- <div id="preloader">
        <div class="colorlib-load"></div>
    </div> -->

    @yield('content')

    <script src="{{ asset("assets/scripts/vendor/jquery.js") }}" type="text/javascript"></script>
    <script src="{{ asset("assets/scripts/vendor/popper.js") }}" type="text/javascript"></script>
    <script src="{{ asset("assets/scripts/vendor/bootstrap.js") }}" type="text/javascript"></script>
    <script src="{{ asset("assets/scripts/landing/index.js") }}" type="text/javascript"></script>
</body>

</html>
