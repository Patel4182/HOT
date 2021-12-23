<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>User</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('user/images/favicon.png')}}">
    <!-- Pignose Calender -->
    <link href="{{ asset('user/plugins/pg-calendar/css/pignose.calendar.min.css')}}" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="{{ asset('user/plugins/chartist/css/chartist.min.css')}}">
    <link rel="stylesheet" href="{{ asset('user/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css')}}">
    <!-- Custom Stylesheet -->
    <link href="{{ asset('user/css/style.css')}}" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        @include('user.layouts.partials.header')
    
        @include('user.layouts.partials.sidebar')
        <div class="content-body">

           @yield('content')
           
        </div>
        @include('user.layouts.partials.footer')
        
    </div>
   
    <!--**********************************
        Scripts
    ***********************************-->
    <script src="{{ asset('user/plugins/common/common.min.js')}}"></script>
    <script src="{{ asset('user/js/custom.min.js')}}"></script>
    <script src="{{ asset('user/js/settings.js')}}"></script>
    <script src="{{ asset('user/js/gleek.js')}}"></script>
    <script src="{{ asset('user/js/styleSwitcher.js')}}"></script>

    <!-- Chartjs -->
    <script src="{{ asset('user/plugins/chart.js/Chart.bundle.min.js')}}"></script>
    <!-- Circle progress -->
    <script src="{{ asset('user/plugins/circle-progress/circle-progress.min.js')}}"></script>
    <!-- Datamap -->
    <script src="{{ asset('user/plugins/d3v3/index.js')}}"></script>
    <script src="{{ asset('user/plugins/topojson/topojson.min.js')}}"></script>
    <script src="{{ asset('user/plugins/datamaps/datamaps.world.min.js')}}"></script>
    <!-- Morrisjs -->
    <script src="{{ asset('user/plugins/raphael/raphael.min.js')}}"></script>
    <script src="{{ asset('user/plugins/morris/morris.min.js')}}"></script>
    <!-- Pignose Calender -->
    <script src="{{ asset('user/plugins/moment/moment.min.js')}}"></script>
    <script src="{{ asset('user/plugins/pg-calendar/js/pignose.calendar.min.js')}}"></script>
    <!-- ChartistJS -->
    <script src="{{ asset('user/plugins/chartist/js/chartist.min.js')}}"></script>
    <script src="{{ asset('user/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js')}}"></script>



    <script src="{{ asset('user/js/dashboard/dashboard-1.js')}}"></script>

</body>

</html>