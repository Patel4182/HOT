@extends('doctor.layouts.app')  
    @section('content')
    <div class="content">
    <!-- @foreach($data as $datas) -->
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Profile</h4>
                  <p class="card-category">Complete your profile</p>
                </div>
                <div class="card-body">
                  <form role="form" method="POST" >
                  {{csrf_field()}}
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                        <label class="bmd-label-floating">Select City</label>
                             <select class="form-control input-xlarge" name="city">
                                 <option value="0" readonly>Select City</option>
                                    @foreach($cities as $city)
                                       <option value="{{$city->id}}">{{$city->city}}</option>
                                     @endforeach
                              </select>
                        </div>
                      </div>
                      
                    </div>
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Username</label>
                          <input type="text" class="form-control" value="{{$datas->name}}" name="name">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email</label>
                          <input type="text" class="form-control" value="{{$datas->email}}"  name="email"> 
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Gender</label>
                          <input type="text" class="form-control"  value="{{$datas->gender}}"  name="gender">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Birth Date</label>
                          <input type="date" class="form-control"  value="{{$datas->bdate}}"  name="bdate">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Mobile No.</label>
                          <input type="text" class="form-control"  value="{{$datas->contact_no}}"  name="contact_no">
                        </div>
                      </div>  
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Specialization</label>
                          <input type="text" class="form-control"  value="{{$datas->specialization}}"  name="specialization">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Degree</label>
                          <input type="text" class="form-control"  value="{{$datas->degree}}"  name="degree">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Experience</label>
                          <input type="text" class="form-control"  value="{{$datas->experience}}"  name="experience">
                        </div>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-gro">
                          <label class="bmd-label-floating">Description</label>
                          <input type="text" class="form-control"  value="{{$datas->description}}"  name="description">
                        </div>
                      </div>
                    </div>
                    <div class="fileupload btn">
                                        <span class="btn-text">edit</span>
                                        <input class="upload" type="file" name="image">
                                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Save</button>
                   
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="javascript:;">
                    <img class="img" src="{{asset('/images/doctor/logo/'.$datas->image)}}" />
                   
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray">doctor of {{$datas->specialization}}  </h6>
                  <h3 class="card-title">{{Auth::user()->name}}</h3>
                  <p class="card-description">
                  {{$datas->description}}   </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach()
    </div>
@endsection
