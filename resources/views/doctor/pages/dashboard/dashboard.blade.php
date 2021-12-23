@extends('doctor.layouts.app')  
    @section('content')

    <div class="content">
    <div class="container-fluid">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-list"></i>
                  </div>
                  <p class="card-category">Total Appointment</p>
                  <h3 class="card-title">{{count($app)}}</h3>
                 
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-danger">warning</i>
                    <a href="{{route('dappointment')}}">Get More Details...</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="fa fa-book"></i>
                  </div>
                  <p class="card-category">Organ Request</p>
                  <h3 class="card-title">{{count($organ)}}</h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-danger">warning</i>
                    <a href="{{route('vieworgan')}}">Get More Details...</a>
                  </div>
                </div>
              </div>
            </div>
           
            
            </div>
          </div>
        
        </div>
      </div>
@endsection