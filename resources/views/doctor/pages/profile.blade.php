@extends('doctor.layouts.app')  
    @section('content')
    <div class="content">
    @foreach($data as $datas)
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Profile</h4>
                  <p class="card-category">Details of your profile</p>
                </div>
                <div class="card-body">
                  <form>
                  <div class="card-body">
                  Email:<h6 class="card-category text-gray">{{$datas->email}}  </h6>
                  Mobile no. :<h6 class="card-category text-gray">{{$datas->contact_no}}  </h6>
                  specialization:<h6 class="card-category text-gray">{{$datas->specialization}}  </h6>
                  Degree:<h6 class="card-category text-gray">{{$datas->degree}}  </h6>
                  Experience:<h6 class="card-category text-gray">{{$datas->experience}}  </h6>
                  Description:<h6 class="card-category text-gray">{{$datas->description}}  </h6>
                  
                </div>
                  
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="{{route('updatedlogo',['id'=>$datas->id])}}">
                    <img class="img" src="{{asset('/images/doctor/logo/'.$datas->image)}}" />
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray">doctor of {{$datas->specialization}}  </h6>
                  <h3 class="card-title">{{Auth::user()->name}}</h3>
                  <p class="card-description">
                  {{$datas->description}}   </p>
                </div>
                <a class="dropdown-item" href="{{route('editdocprofile',['id'=>$datas->id])}}"><button class="btn btn-primary">Edit-Profile</button></a>
              </div>
            </div>
          </div>
        </div>
        @endforeach()
    </div>
@endsection