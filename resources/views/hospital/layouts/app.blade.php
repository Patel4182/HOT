<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('hospital/assets/img/favicon.ico')}}">
    <title>Hospital | Organ Transplant</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('hospital/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('hospital/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('hospital/assets/css/style.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('hospital/assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('hospital/assets/css/select2.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('hospital/assets/css/bootstrap-datetimepicker.min.css')}}">

    
    <link rel="stylesheet" type="text/css" href="{{asset('hospital/assets/css/dataTables.bootstrap4.min.css')}}">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        @include('hospital.layouts.partials.header')
        @include('hospital.layouts.partials.sidebar')
        @yield('content')
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="{{asset('hospital/assets/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('hospital/assets/js/popper.min.js')}}"></script>
    <script src="{{asset('hospital/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('hospital/assets/js/jquery.slimscroll.js')}}"></script>
    <script src="{{asset('hospital/assets/js/Chart.bundle.js')}}"></script>
    <script src="{{asset('hospital/assets/js/chart.js')}}"></script>
    <script src="{{asset('hospital/assets/js/app.js')}}"></script>
    
    <script src="{{asset('hospital/assets/js/select2.min.js')}}"></script>
    <script src="{{asset('hospital/assets/js/moment.min.js')}}"></script>
    <script src="{{asset('hospital/assets/js/bootstrap-datetimepicker.min.js')}}"></script>
    <script src="{{asset('hospital/assets/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('hospital/assets/js/dataTables.bootstrap4.min.js')}}"></script>
</body>



</html>