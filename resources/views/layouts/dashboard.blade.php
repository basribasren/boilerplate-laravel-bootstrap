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
    <style>
    #loader {
      transition: all 0.3s ease-in-out;
      opacity: 1;
      visibility: visible;
      position: fixed;
      height: 100vh;
      width: 100%;
      background: #fff;
      z-index: 90000;
    }

    #loader.fadeOut {
      opacity: 0;
      visibility: hidden;
    }

    .spinner {
      width: 40px;
      height: 40px;
      position: absolute;
      top: calc(50% - 20px);
      left: calc(50% - 20px);
      background-color: #333;
      border-radius: 100%;
      -webkit-animation: sk-scaleout 1.0s infinite ease-in-out;
      animation: sk-scaleout 1.0s infinite ease-in-out;
    }

    @-webkit-keyframes sk-scaleout {
      0% { -webkit-transform: scale(0) }
      100% {
        -webkit-transform: scale(1.0);
        opacity: 0;
      }
    }

    @keyframes sk-scaleout {
      0% {
        -webkit-transform: scale(0);
        transform: scale(0);
      } 100% {
        -webkit-transform: scale(1.0);
        transform: scale(1.0);
        opacity: 0;
      }
    }
  </style>

    <link rel="stylesheet" href="{{ asset("assets/stylesheets/vendor/bootstrap.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/stylesheets/vendor/font-awesome.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/stylesheets/vendor/themify-icons.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/stylesheets/vendor/jquery.dataTables.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/stylesheets/vendor/sparkline.css") }}" />
    <link rel="stylesheet" href="{{ asset("assets/stylesheets/dashboard/index.css") }}" />
</head>
<body class="app">
    <div>
        @include('component-dashboard.sidebar.sidebar-wrapper')
        <div class="page-container">
            @include('component-dashboard.header.header-wrapper')
            <main class='main-content bgc-grey-100'>
                <div id='mainContent'>
                    <!-- @Page Loader -->
                    <div id='loader'>
                        <div class="spinner"></div>
                    </div>

                    <script>
                        window.addEventListener('load', () => {
                        const loader = document.getElementById('loader');
                        setTimeout(() => {
                            loader.classList.add('fadeOut');
                        }, 300);
                        });
                    </script>
                    
                    @yield('content')
                </div>
            </main>
            @include('component-dashboard.footer.footer-wrapper')
        </div>
    </div>
  
    <!-- Scripts -->
    <script src="{{ asset("assets/scripts/vendor/jquery.js") }}" type="text/javascript"></script>
    <script src="{{ asset("assets/scripts/vendor/bootstrap.js") }}" type="text/javascript"></script>
    <script src="{{ asset("assets/scripts/vendor/popper.js") }}" type="text/javascript"></script>
    <script src="{{ asset("assets/scripts/dashboard/index.js") }}" type="text/javascript"></script>
</body>
</html>


