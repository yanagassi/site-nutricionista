<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Painel Administrativo</title>

    <link href="{{ asset('css/plugins/switchery/switchery.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/plugins/jquery-circliful/css/jquery.circliful.css') }}" rel="stylesheet" type="text/css" />
    
    <link href="{{ asset('css/blue/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/blue/assets/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/blue/assets/css/style.css') }}" rel="stylesheet" type="text/css">

    <script src="{{ asset('css/blue/assets/js/modernizr.css') }}"></script>

</head>
    <body class="fixed-left">
        
        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->

    </div>

    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>


            <script>
            var resizefunc = [];
        </script>
        <!-- Plugins  -->
        <script src="{{ asset('css/blue/assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('css/blue/assets/js/popper.min.js') }}"></script><!-- Popper for Bootstrap -->
        <script src="{{ asset('css/blue/assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('css/blue/assets/js/detect.js') }}"></script>
        <script src="{{ asset('css/blue/assets/js/fastclick.js') }}"></script>
        <script src="{{ asset('css/blue/assets/js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('css/blue/assets/js/jquery.blockUI.js') }}"></script>
        <script src="{{ asset('css/blue/assets/js/waves.js') }}"></script>
        <script src="{{ asset('css/blue/assets/js/wow.min.js') }}"></script>
        <script src="{{ asset('css/blue/assets/js/jquery.nicescroll.js') }}"></script>
        <script src="{{ asset('css/blue/assets/js/jquery.scrollTo.min.js') }}"></script>
        <script src="{{ asset('css/plugins/switchery/switchery.min.js') }}"></script>

        <!-- Counter Up  -->
        <script src="{{ asset('css/plugins/waypoints/lib/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('css/plugins/counterup/jquery.counterup.min.js') }}"></script>

        <!-- circliful Chart -->
        <script src="{{ asset('css/plugins/jquery-circliful/js/jquery.circliful.min.js') }}"></script>
        <script src="{{ asset('css/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>

        <!-- skycons -->
        <script src="{{ asset('css/plugins/skyicons/skycons.min.js') }}" type="text/javascript"></script>

        <!-- Page js  -->
        <script src="{{ asset('css/blue/assets/pages/jquery.dashboard.js') }}"></script>

        <!-- Custom main Js -->
        <script src="{{ asset('css/blue/assets/js/jquery.core.js') }}"></script>
        <script src="{{ asset('css/blue/assets/js/jquery.app.js') }}"></script>


        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
                $('.circliful-chart').circliful();
            });

            // BEGIN SVG WEATHER ICON
            if (typeof Skycons !== 'undefined'){
                var icons = new Skycons(
                        {"color": "#3bafda"},
                        {"resizeClear": true}
                        ),
                        list  = [
                            "clear-day", "clear-night", "partly-cloudy-day",
                            "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                            "fog"
                        ],
                        i;

                for(i = list.length; i--; )
                    icons.set(list[i], list[i]);
                icons.play();
            };

        </script>
</body>
</html>
