@extends('admin.layouts.app')  
    @section('content')
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
                        
                    <!-- BEGIN DASHBOARD STATS 1-->
                    

                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <a class="dashboard-stat dashboard-stat-v2 blue" href="{{route('viewcities')}}">
                                <div class="visual">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span data-counter="counterup" data-value="">{{count($city)}}</span>
                                    </div>
                                    <div class="desc"><h3> Cities </h3></div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <a class="dashboard-stat dashboard-stat-v2 red" href="{{route('hospitalall')}}">
                                <div class="visual">
                                    <i class="fa fa-hospital-o"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span data-counter="counterup" data-value="">{{count($hospital)}}</span></div>
                                    <div class="desc"><h3> Hospitals </h3></div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <a class="dashboard-stat dashboard-stat-v2 green" href="{{route('doctorall')}}">
                                <div class="visual">
                                    <i class="fa fa-user-md"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span data-counter="counterup" data-value="">{{count($doctor)}}</span>
                                    </div>
                                    <div class="desc"><h3> Doctors </h3></div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <a class="dashboard-stat dashboard-stat-v2 purple" href="{{route('allblood')}}">
                                <div class="visual">
                                    <i class="fa fa-stethoscope"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span data-counter="counterup" data-value="">{{count($blood)}}</span></div>
                                    <div class="desc"><h3> Bloodbank </h3></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <a class="dashboard-stat dashboard-stat-v2 blue" href="{{route('viewcontact')}}">
                                <div class="visual">
                                    <i class="fa fa-book"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span data-counter="counterup" data-value="">{{count($contact)}}</span>
                                    </div>
                                    <div class="desc"><h3> Contact </h3></div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <a class="dashboard-stat dashboard-stat-v2 red" href="{{route('viewinquiry')}}">
                                <div class="visual">
                                    <i class="fa fa-pencil-square-o"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span data-counter="counterup" data-value="">{{count($inquiry)}}</span></div>
                                    <div class="desc"><h3> Inquiries </h3></div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <a class="dashboard-stat dashboard-stat-v2 green" href="{{route('viewappointment')}}">
                                <div class="visual">
                                    <i class="fa fa-stethoscope"></i>
                                </div>
                                <div class="details">
                                    <div class="number">
                                        <span data-counter="counterup" data-value="">{{count($appointment)}}</span></div>
                                    <div class="desc"><h3> Appointment </h3></div>
                                </div>
                            </a>
                        </div>
                    </div>
                   
                </div>
                <!-- END CONTENT BODY -->
    @endsection