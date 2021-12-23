@extends('admin.layouts.app')  
@section('content')
   <!-- BEGIN CONTENT -->
   <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN THEME PANEL -->
                 
                    @foreach($doctor as $doctors)
                    <!-- END THEME PANEL -->
                    <h3 class="page-title"> {{$doctors->name}} Profile | Account
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
                                        <img src="{{asset('/images/doctor/logo/'.$doctors->image)}}" class="img-responsive" style="widtth:150px;height:150px;" alt=""> </div>
                                    <!-- END SIDEBAR USERPIC -->
                                    <!-- SIDEBAR USER TITLE -->
                                    <div class="profile-usertitle">
                                        <div class="profile-usertitle-name"> {{$doctors->name}} </div>
                                        <div class="profile-usertitle-job"> {{$doctors->email}} </div>
                                    </div>
                                    <!-- END SIDEBAR USER TITLE -->
                                    <!-- SIDEBAR BUTTONS -->
                                    <div class="profile-userbuttons">
                                    @if($doctors->status=='0')
                                        <a href="{{route('dapprove',['id'=>$doctors->id,'status'=>'1'])}}" class="btn btn-circle green btn-sm">Approve</a>
                                    @else    
                                        <a href="{{route('dapprove',['id'=>$doctors->id,'status'=>'0'])}}" class="btn btn-circle red btn-sm">Dis-Approve</a>
                                    @endif  
                                    </div>
                                    <!-- END SIDEBAR BUTTONS -->
                                    <!-- SIDEBAR MENU -->
                                    <div class="profile-usermenu">
                                        <ul class="nav">
                                            <li>
                                                <a href="#">
                                                    <i class="fa fa-phone"></i> Contact No <br>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$doctors->contact_no}} <br>
                                                    <i class="fa fa-book"></i> specialization <br>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$doctors->specialization}} <br>
                                                    <i class="fa fa-stethoscope"></i> Degree <br>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$doctors->degree}} </a>
                                                   
                                           </li>
                                           
                                        </ul>
                                    </div>
                                    <!-- END MENU -->
                                </div>
                                <!-- END PORTLET MAIN -->
                                <!-- PORTLET MAIN -->
                                
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
                                                        <a href="#tab_1_1" data-toggle="tab">Organ Details</a>
                                                    </li>
                                                    <li>
                                                        <a href="#tab_1_2" data-toggle="tab">Appointment</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="portlet-body">
                                                <div class="tab-content active">
                                                    <!-- CHANGE AVATAR TAB -->
                                                    <div class="tab-pane" id="tab_1_1">
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
                                                   
                                                    <!-- END CHANGE AVATAR TAB -->
                                                    <!-- CHANGE PASSWORD TAB -->
                                                    <div class="tab-pane" id="tab_1_2">
                                                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                                    
                                                <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Hospital</th>
                                                <th>Doctor</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Contact No</th>
                                                <th>Gender</th>
                                                <th>Age</th>
                                                <th>City</th>
                                                <th>Prefered Date</th>
                                                <th>Prefered Time</th>
                                              
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($appointment as $appointment)
                                            <tr class="odd gradeX">
                                                <td>{{$appointment->id}}</td>
                                                <td>{{$appointment->hospital->name}}</td>
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
                                                    </div>
                                                    </div>
                                                    <!-- END CHANGE PASSWORD TAB -->
                                                    <!-- PRIVACY SETTINGS TAB -->
                                                    <!-- END PRIVACY SETTINGS TAB -->
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