@extends('admin.layouts.app')  
@section('content')
   <!-- BEGIN CONTENT -->
   <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN THEME PANEL -->
                 
                    @foreach($blood as $doctors)
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
                                        <img src="{{asset('/images/bloodbank/logo/'.$doctors->image)}}" class="img-responsive" style="widtth:150px;height:150px;" alt=""> </div>
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
                                        <a href="{{route('bapprove',['id'=>$doctors->id,'status'=>'1'])}}" class="btn btn-circle green btn-sm">Approve</a>
                                    @else    
                                        <a href="{{route('bapprove',['id'=>$doctors->id,'status'=>'0'])}}" class="btn btn-circle red btn-sm">Dis-Approve</a>
                                    @endif  
                                    </div>
                                    <!-- END SIDEBAR BUTTONS -->
                                    <!-- SIDEBAR MENU -->
                                    <div class="profile-usermenu">
                                        <ul class="nav">
                                            <li>
                                                <a href="#">
                                                    <i class="icon-home"></i> specialization <br>
                                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$doctors->specialization}} <br>
                                                    <i class="icon-home"></i> Degree <br>
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
                                                        <a href="#tab_1_1" data-toggle="tab">Stock Details</a>
                                                    </li>
                                                   
                                                </ul>
                                            </div>
                                            <div class="portlet-body">
                                                <div class="tab-content active">
                                                    <!-- CHANGE AVATAR TAB -->
                                                    <div class="tab-pane active" id="tab_1_1">
                                                    <div class="portlet light ">
                                                        <div class="portlet-title">
                                                    <div class="caption font-dark">
                                                        <i class="icon-settings font-dark"></i>
                                                        <span class="caption-subject bold uppercase"> Stock Details</div>
                                                </div>
                                                <table id="example" class="display nowrap" style="width:100%">
                                                        <thead>
                                                            <tr>
                                                            <th>Group Name</th>
                                                            <th>No.Of.Bottles</th>
                                                            <th>Remaing Bottle</th>
                                                            <th>Summaey</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tbody>
                                            @foreach($stock as $organ)
                                                <tr class="odd gradeX">
                                                    <td>{{$organ->groupname}} </td>
                                                    <td>{{$organ->no_of_bottle}}</td>
                                                    <td>{{$organ->remaining_bottle}} </td>
                                                    <td>{{$organ->summary}} </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                                   
                                                    <!-- END CHANGE AVATAR TAB -->
                                                    <!-- CHANGE PASSWORD TAB -->
                                                    
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