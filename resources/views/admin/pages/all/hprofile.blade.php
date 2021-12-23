@extends('admin.layouts.app')  
@section('content')
   <!-- BEGIN CONTENT -->
   <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN THEME PANEL -->
                    
                    @foreach($hospital as $hospitals)
                    <!-- END THEME PANEL -->
                    <h3 class="page-title"> {{$hospitals->name}} Profile | Account
                        <small>Profile Page</small>
                    </h3>
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN PROFILE SIDEBAR -->
                            <div class="profile-sidebar">
                                <!-- PORTLET MAIN -->
                                <div class="portlet light profile-sidebar-portlet ">
                                    <!-- SIDEBAR USERPIC -->
                                    <div class="profile-userpic">
                                        <img src="{{asset('/images/hospital/logo/'.$hospitals->image)}}" class="img-responsive" style="widtth:150px;height:150px;" alt="">
                                    </div>
                                    <!-- END SIDEBAR USERPIC -->
                                    <!-- SIDEBAR USER TITLE -->
                                    <div class="profile-usertitle">
                                        <div class="profile-usertitle-name"> {{$hospitals->name}} </div>
                                        <div class="profile-usertitle-job"> {{$hospitals->email}} </div>
                                    </div>
                                    <!-- END SIDEBAR USER TITLE -->
                                    <!-- SIDEBAR BUTTONS -->
                                    <div class="profile-userbuttons">
                                    @if($hospitals->status=='0')
                                        <a href="{{route('happrove',['id'=>$hospitals->id,'status'=>'1'])}}" class="btn btn-circle green btn-sm">Approve</a>
                                    @else    
                                        <a href="{{route('happrove',['id'=>$hospitals->id,'status'=>'0'])}}" class="btn btn-circle red btn-sm">Dis-Approve</a>
                                    @endif    
                                    </div>
                                    <!-- END SIDEBAR BUTTONS -->
                                    <!-- SIDEBAR MENU -->
                                    <div class="profile-usermenu">
                                        <ul class="nav">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-home"></i>Address:<br>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$hospitals->address}} </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-user"></i> Contact Person Name :<br>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$hospitals->contact_person_name}} </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                     <i class="fa fa-phone"></i>Contact Person Contact No.: <br>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; +91-{{$hospitals->contact_person_mobile_no}} </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- END MENU -->
                                </div>
                                <!-- END PORTLET MAIN -->
                               
                            </div>
                            <!-- END BEGIN PROFILE SIDEBAR -->
                            <!-- BEGIN PROFILE CONTENT -->
                            <div class="profile-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="portlet light ">
                                            <div class="portlet-title tabbable-line">
                                                <div class="caption caption-md">
                                                    <i class="icon-globe theme-font hide"></i>
                                                    <span class="caption-subject font-blue-madison bold uppercase">Profile Account</span>
                                                </div>
                                                <ul class="nav nav-tabs">
                                                    <li class="active">
                                                        <a href="#tab_1_1" data-toggle="tab">Doctors Info</a>
                                                    </li>
                                                     <li>
                                                        <a href="#tab_1_2" data-toggle="tab">Organ Details</a>
                                                    </li> 
                                                   
                                                    <!-- <li>
                                                        <a href="#tab_1_3" data-toggle="tab">Require Organ
                                                        </a>
                                                    </li>  -->
                                                    <li>
                                                        <a href="#tab_1_4" data-toggle="tab">Appointment
                                                        </a>
                                                    </li> 
                                                </ul>
                                            </div>
                                            <div class="portlet-body">
                                                <div class="tab-content">
                                                    <!--  Doctor TAB -->
                                                    <div class="tab-pane active" id="tab_1_1">
                                                    <div class="row">
                                                        @foreach($doctor as $doctors)
                                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                    <div class="mt-card-item">
                                                    <div class="mt-card-avatar mt-overlay-1">
                                                        <a href=""><img src="{{asset('/images/doctor/logo/'.$doctors->image)}}" height="100" width="100"></a>
                                                        <div class="mt-overlay">
                                                            <ul class="mt-info">
                                                                <li>
                                                                    <a class="btn default btn-outline" href="{{route('dprofile',['id'=>$doctors->id])}}">
                                                                        <i class="icon-link"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="mt-card-content">
                                                    <h3 class="mt-card-name">{{$doctors->name}} </h3>
                                                    <p class="mt-card-desc font-grey-mint">{{$doctors->cities->city}} </p>  
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach

                                        </div>
                                                    </div> 
                                                    <!-- END Doctor TAB -->
                                                    <!-- Require organ TAB -->
                                                    <div class="tab-pane" id="tab_1_2">
                                                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                                    <thead>
                                                        <tr>
                                                        <th>ID</th>
                                                        <th>organ Name</th>
                                                        <th>Status</th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Contact No</th>
                                                        <th>Message</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                            @foreach($organ as $organs)
                                                                <tr class="odd gradeX">
                                                                   
                                                                <td>{{$organs->id}} </td>
                                                                <td>{{$organs->organ_name}} </td>
                                                                <td>{{$organs->status}} </td>
                                                                <td>{{$organs->name}} </td>
                                                                <td>{{$organs->email}} </td>
                                                                <td>{{$organs->contact_no}} </td>
                                                                <td>{{$organs->description}} </td>
                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- END Require organ TAAB -->
                                                   
                                                     <!--Appointment TAB -->
                                                     <div class="tab-pane" id="tab_1_4">
                                                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                                    <thead>
                                                        <tr>
                                                        <th>ID</th>
                                                        <th>Doctor Name</th>
                                                        <th>Patient Name</th>
                                                        <th>Email</th>
                                                        <th>Contact No</th>
                                                        <th>Gender</th>
                                                        <th>Age</th>
                                                        <th>City</th>
                                                        <th>Appointment Date</th>
                                                        <th>Appointment Time</th>
                                                        <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                            @foreach($app as $appointment)
                                                                <tr class="odd gradeX">
                                                                <td>{{$appointment->id}}</td>
                                                                <td>{{$appointment->doctor->name}} </td>
                                                                <td>{{$appointment->fullname}} </td>
                                                                <td>{{$appointment->email}} </td>
                                                                <td>{{$appointment->contact_no}} </td>
                                                                <td>{{$appointment->gender}} </td>
                                                                <td>{{$appointment->age}} </td>
                                                                <td>{{$appointment->city}} </td>
                                                                <td>{{$appointment->prefer_date}} </td>
                                                                <td>{{$appointment->prefer_time}} </td>
                                                                <td><span class="custom-badge status-red">Inactive</span></td>
                                                                </tr>
                                                            @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <!-- END Appointment TAB -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END PROFILE CONTENT -->
                        </div>
                    </div>
                    @endforeach()
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
         
 @endsection