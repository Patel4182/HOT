@extends('front.layouts.app')  
 @section('content')
	<section class="ftco-section ftco-no-pt">
                <div class="container">
                    <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
               
                <h2 class="mb-4">Our Qualified Doctors</h2>
                <p>Your good health is our greatest achievement.</p></div>
                </div>	
                    <div class="row">
                    @foreach($doctor as $doctors)                       
                    <div class="col-md-6 col-lg-3 ftco-animate">
                            <div class="staff">
                                <div class="img-wrap d-flex align-items-stretch">
                                    <div class="img align-self-stretch"  style="background-image: url('{{asset('/images/doctor/logo/'.$doctors->image)}}');"></div>
                                </div>
                                <div class="text pt-3 text-center">
                                    <h3>{{$doctors->name}}</h3>
                                    <span class="position mb-2">{{$doctors->specialization}}</span>
                                    <a href="{{route('appointment')}}" class="btn btn-primary">Book AppointMent</a>

                                </div>
                            </div>
                        </div>
                    @endforeach()
                      
        </div>
            </section>
 @endsection