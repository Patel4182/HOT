@extends('bloodbank.layouts.app')
    @section('content')
   
        <div class="container-fluid">
            <div class="row clearfix">
            @foreach($blood as $bloods)
                <div class="col-xs-12 col-sm-3">
                    <div class="card profile-card">
                        <div class="profile-header" style="background-color:white;">&nbsp;</div>
                       
                        <div class="profile-body">
                            <div class="image-area">
                                <img src="{{asset('/images/Bloodbank/logo/'.$bloods->image)}}" style="height:150px;weight:150px;" alt="AdminBSB - Profile Image" />
                            </div>
                            <div class="content-area">
                                <h3>{{Auth::user()->name}}</h3>
                                <p>Blood Bank<br>
                               
                            </div>
                        </div>
                      
                    </div>

                    <!-- <div class="card card-about-me">
                        <div class="header">
                            <h2>ABOUT ME</h2>
                        </div>
                        <div class="body">
                            <ul>
                                <li>
                                    <div class="title">
                                         Email
                                    </div>
                                    <div class="content">
                                       {{$bloods->email}}
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                       Contact no. 
                                    </div>
                                    <div class="content">
                                    {{$bloods->contactno}}
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                       Address
                                    </div>
                                    <div class="content">
                                    {{$bloods->address}}
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                         Description
                                    </div>
                                    <div class="content">
                                    {{$bloods->description}}
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div> -->
                </div>
            @endforeach
                <div class="col-xs-12 col-sm-9">
                    <div class="card">
                        <div class="body">
                           
                                    <div class="card card-about-me">
                        <div class="header">
                            <h2>ABOUT ME</h2>
                        </div>
                        <div class="body">
                            <ul>
                                <li>
                                    <div class="title">
                                         Email
                                    </div>
                                    <div class="content">
                                       {{$bloods->email}}
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                       Contact no. 
                                    </div>
                                    <div class="content">
                                    {{$bloods->contactno}}
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                       Address
                                    </div>
                                    <div class="content">
                                    {{$bloods->address}}
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                    contact person name
                                    </div>
                                    <div class="content">
                                       {{$bloods->contact_person_name}}
                                    </div>
                                </li>
                                <li>
                                    <div class="title">
                                    contact person mobile no
                                    </div>
                                    <div class="content">
                                       {{$bloods->contact_person_mobile_no}}
                                    </div>
                                </li>

                                <li>
                                    <div class="title">
                                         Description
                                    </div>
                                    <div class="content">
                                    {{$bloods->description}}
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                             
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  
    @endsection