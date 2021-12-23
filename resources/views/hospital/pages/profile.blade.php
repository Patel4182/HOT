@extends('hospital.layouts.app')
@section('content')
@foreach($data as $datas)
    <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-7 col-6">
                        <h4 class="page-title">Hospital Profile</h4>
                    </div>
                </div>
                <div class="card-box profile-header">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="profile-view">
                                <div class="profile-img-wrap">
                                    <div class="profile-img">
                                        <a href="#"><img class="avatar" src="{{asset('/images/hospital/logo/'.$datas->image)}}" alt=""></a>
                                    </div>
                                </div>
                                <div class="profile-basic">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="profile-info-left">
                                                <h3 class="user-name m-t-0 mb-0">{{$datas->name}}</h3>
                                                <div class="col-md-12">
                                                    <ul class="personal-info">
                                                        <li>
                                                            <span class="title">Phone:</span>
                                                            <span class="text">+91 {{$datas->contact_no}}</a></span>
                                                        </li>
                                                        <li>
                                                            <span class="title">Email:</span>
                                                            <span class="text">{{$datas->email}}</span>
                                                        </li>
                                                        <li>
                                                            <span class="title">Address:</span>
                                                            <span class="text">{{$datas->address}}</span>
                                                        </li>
                                                    <br><br><br>
                                                    </ul>
                                                </div> 
                                             </div>
                                        </div>
                                        <div class="col-md-7">
                                                    <ul class="personal-info">
                                                        <li>
                                                            <span class="title">Contact Person phone:</span>
                                                            <span class="text">+91 {{$datas->contact_person_mobile_no}}</span>
                                                        </li>
                                                        <br>
                                                        <li>
                                                            <span class="title">Contact Person Name:</span>
                                                            <span class="text">{{$datas->contact_person_name}}</span>
                                                        </li>
                                                       
                                                    </ul>
                                                </div> 
                                       <a class="dropdown-item" href="{{route('edit-profile',['id'=>$datas->id])}}">
                                       <button class="btn btn-success">Edit-profile</button></a>
                                   
                                    </div>
                                </div>
                            </div>                        
                        </div>
                    </div>
                </div>
				
            </div>
            
</div>
@endforeach()
    @endsection