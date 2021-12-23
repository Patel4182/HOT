@extends('doctor.layouts.app')  
    @section('content')
    <div class="content">
    
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Complete your profile</h4>
                 
                </div>
                <div class="card-body">
                  <form role="form" method="POST" action="{{route('doctorprofile')}}" enctype="multipart/form-data">
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
                      <div class="col-md-6">
                        <div class="form-group">
                        <label class="bmd-label-floating">Select Hospital</label>
                             <select class="form-control input-xlarge" name="hname">
                                 <option value="0" readonly>Select Hospital</option>
                                 @foreach($hospital as $hospitals)
                                       <option value="{{$hospitals->id}}">{{$hospitals->name}}</option>
                                     @endforeach
                              </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Username</label>
                          <input type="text" class="form-control"  name="name">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email</label>
                          <input type="text" class="form-control"name="email"> 
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Gender</label>
                          <input type="text" class="form-control"  name="gender">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Birth Date</label>
                          <input type="date" class="form-control"  name="bdate">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Mobile No.</label>
                          <input type="text" class="form-control"   name="contact_no">
                        </div>
                      </div>  
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Specialization</label>
                          <input type="text" class="form-control"  name="specialization">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Degree</label>
                          <input type="text" class="form-control"   name="degree">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Experience</label>
                          <input type="text" class="form-control"  name="experience">
                        </div>
                      </div>
                    </div>
                    
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Description</label>
                          <input type="text" class="form-control"  name="description">
                        </div>
                      </div>
                    </div>
                    <div class="row">

                                        <input type="file" id="exampleInputFile1" name="image" enctype="multipart/form-data">
                                                <p class="help-block"> File Format (.jpeg .jpg or .png) </p>
                                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Insert</button>
                   
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="javascript:;">
                    <img class="img" src="{{asset('/images/doctor/logo/'.$datas->image)}}"/>
                   
                  </a>
                </div>
                <div class="card-body">
                  <h6 class="card-category text-gray">doctor of   </h6>
                  <h3 class="card-title">{{Auth::user()->name}}</h3>
                  <p class="card-description">
                 </p>
                </div>
              </div>
            </div>
          </div>
        </div>
    
    </div>
@endsection
