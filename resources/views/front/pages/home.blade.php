@extends('front.layouts.app')  
@section('content')
   
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Inquire Now For OrganTransplant</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				@if($errors->any())
                    @include('errors.error')
                @endif
				<form role="form" method="post" action="{{route('addorganinquiry')}}">
				{{csrf_field()}}
                <div class="form-group">
						<label class="col-form-label">Full Name:</label>
						<input class="form-control" type="text" name="fullname"/>
					</div>
					<div class="form-group">
						<label class="col-form-label">Email:</label>
						<input class="form-control" type="text" name="email"/>
					</div>
                    <div class="form-group">
						<label class="col-form-label">Subject:</label>
						<input class="form-control" type="text" name="subject"/>
					</div>
					<div class="form-group">
						<label class="col-form-label">Contact:</label>
						<input class="form-control" type="text" name="contact_no"/>
					</div>
					<div class="form-group">
						<label class="col-form-label">Message:</label>
						<textarea id="editor1" class="form-control" name="message"></textarea>
					</div>
					<div class="modal-footer">
						
						<button type="submit" class="btn btn-secondary">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Inquire Now For BloodBank</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				@if($errors->any())
                    @include('errors.error')
                @endif
				<form role="form" method="post" action="{{route('addbloodinquiry')}}">
				{{csrf_field()}}
                <div class="form-group">
						<label class="col-form-label">Full Name:</label>
						<input class="form-control" type="text" name="fullname"/>
					</div>
					<div class="form-group">
						<label class="col-form-label">Email:</label>
						<input class="form-control" type="text" name="email"/>
					</div>
                    <div class="form-group">
						<label class="col-form-label">Contact:</label>
						<input class="form-control" type="text" name="contact_no"/>
					</div>
                    <div class="form-group">
						<label class="col-form-label">Subject:</label>
						<input class="form-control" type="text" name="subject"/>
					</div>
					
					<div class="form-group">
						<label class="col-form-label">Message:</label>
						<textarea id="editor1" class="form-control" name="message"></textarea>
					</div>
					<div class="modal-footer">
						
						<button type="submit" class="btn btn-secondary">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">make request Now For OrganTransplant</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				@if($errors->any())
                    @include('errors.error')
                @endif
				<form role="form" method="post" action="{{route('appointment')}}">
				{{csrf_field()}}
					<div class="form-group">
						<label>Select Hospital</label>
						<select class="form-control" name="hname">
							<option value="0" readonly>Select Hospital</option>
							@foreach($hospital as $hospitals)
                    			<option value="{{$hospitals->id}}">{{$hospitals->name}}</option>
                    		@endforeach
						</select>
					</div>
					<div class="form-group">
						<label>Select Doctor</label>
						<select class="form-control" name="doctor">
							<option value="0" readonly>Select Doctor</option>
							@foreach($doctor as $doctors)
                        		<option value="{{$doctors->id}}">{{$doctors->name}}</option>
                    		@endforeach	
						</select>
					</div>
                    <div class="form-group">
						<label class="col-form-label">Select City:</label>
                        <select class="form-control" name="city">
							<option value="0" readonly>Select city</option>
                        @foreach($city as $cities)
                    			<option value="{{$cities->id}}">{{$cities->city}}</option>
                    		@endforeach
							</select>
					</div>
					<div class="form-group">
						<label class="col-form-label">Full Name:</label>
						<input class="form-control" type="text" name="fullname"/>
					</div>
					<div class="form-group">
						<label class="col-form-label">Email:</label>
						<input class="form-control" type="text" name="email"/>
					</div>
					<div class="form-group">
						<label class="col-form-label">Gender:</label>
						<input type="radio" value="male" name="gender"/> Male
						<input type="radio" value="female" name="gender"/> Female
					</div>
					<div class="form-group">
						<label class="col-form-label">Contact No:</label>
						<input class="form-control" type="text" name="contact_no"/>
					</div>
					<div class="form-group">
						<label class="col-form-label">Age:</label>
						<input class="form-control" type="text" name="age"/>
					</div>
					
					<div class="form-group">
						<label class="col-form-label">Date:</label>
						<input class="form-control" type="date" name="prefer_date"/>
					</div>
					<div class="form-group">
						<label class="col-form-label">Time:</label>
						<input class="form-control" type="time" name="prefer_time"/>
					</div>
					<div class="form-group">
						<label class="col-form-label">Message:</label>
						<textarea class="form-control" name="message"></textarea>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-secondary">Request</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
    <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image:url({{asset('front/images/boodbank.jpg')}});height:100%;" data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
            <div class="col-md-6 text ftco-animate">
                <h1 class="mb-4"><span style="color:#dc3545;"> Organ Transplant</span></h1>
                <h3 class="subheading">This is a gift anyone can give.<br>It has no cost and it can be tremendously powerful.</h3>
                <p class="button-custom order-lg-last mb-0">
			        <button type="button" class="btn btn-outline-danger  px-4 py-3 mt-3" data-toggle="modal" data-target="#exampleModal2" data-whatever="@fat">
				        Inquire Now for OrganTransplant
			        </button>
		        </p>
            </div>
            </div>
            </div>
        </div>
        
        <div class="slider-item" style="background-image:url({{asset('front/images/boodbank.jpg')}});height:100%;"  data-stellar-background-ratio="0.5">
            <div class="overlay"></div>
            <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
            <div class="col-md-6 text ftco-animate">
                <h1 class="mb-4"><span style="color:#dc3545;">Blood Bank</span></h1>
                <h3 class="subheading">Bring a life back to power.<br>Make blood donation your responsibility.</h3>
                <p class="button-custom order-lg-last mb-0">
			        <button type="button" class="btn btn-outline-danger px-4 py-3 mt-3" data-toggle="modal" data-target="#exampleModal3" data-whatever="@fat">
                    Inquire Now for BloodBanck
			        </button>
		        </p>
               
            </div>
            </div>
            </div>
        </div>
    </section>
    
        <section class="ftco-section ftco-no-pt ftc-no-pb">
                <div class="container">
                    <div class="row no-gutters">
                        <div class="col-md-5 p-md-5 img img-2 mt-5 mt-md-0" style="background-image: url({{asset('front/images/12.jpg')}});">
                        </div>
                        <div class="col-md-7 wrap-about py-4 py-md-5 ftco-animate">
                        <div class="heading-section mb-5">
                    <div class="pl-md-5 ml-md-5">
                        <span class="subheading" style="color:#dc3545;">About</span>
                        <h2 class="mb-4" style="font-size: 28px;color:#dc3545;">Human Organ Transplant</h2>
                    </div>
                </div>
                <div class="pl-md-5 ml-md-5 mb-5">
                                <p>Organ Transplant is a procedure in which an organ from a live or dead person is procured, the person being referred to as a donor. The process in which the organs are recovered is called as Harvesting and the person who receives the organ is called a recipient. Living donation and deceased/cadaver donation are the two types of donation.</p>
                                <div class="row mt-5 pt-2">
                                    <div class="col-lg-6">
                                        <div class="services-2 d-flex">
                                            <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center" style="color:red;"><span class="icon-heart" style="color:#dc3545;"></span></div>
                                            <div class="text">
                                                <h3>Living Donation</h3>
                                                <p>This type of donation can be made  when the donor is alive and healthy and only liver or kidney can be transplanted into the relatives of the donor.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="services-2 d-flex">
                                            <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="icon-person" style="color:#dc3545;"></span></div>
                                            <div class="text">
                                                <h3>Deceased Donation</h3>
                                                <p>This type of donation can be made when a person is declared dead by doctors.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="services-2 d-flex">
                                            <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="icon-tint" style="color:#dc3545;"></span></div>
                                            <div class="text">
                                                <h3>Blood Bank</h3>
                                                <p>It solves the problem of blood emergencies by connecting blood donors directly with people who need the blood cell.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="services-2 d-flex">
                                            <div class="icon mt-2 mr-3 d-flex justify-content-center align-items-center"><span class="icon-medkit" style="color:#dc3545;"></span></div>
                                            <div class="text">
                                                <h3>Hospital</h3>
                                                <p>It helps you to find best hospital for particular organ transplant in your area or city. It will save your time.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter" id="section-counter">    
        <div class="container" >
                <div class="row">
                    <div class="col-md-6 py-5 pr-md-5 home"  style="background-image: url({{asset('front/images/1.jpg')}}); background-repeat:no-repeat;" >
                    <div class="heading-section heading-section-white ftco-animate mb-5">
                            <p class="button-custom order-lg-last mb-6">

			                <button type="button"  class="btn btn-danger px-6 py-3 mt-3" data-toggle="modal" data-target="#exampleModal4" data-whatever="@fat">
				                    Make Appointment For Consultation 
			                </button>
		                    </p>
                        </div>
                        
                    </div>
                    <div class="col-lg-6 p-5 bg-counter aside-stretch">
                            <h3 class="vr">About</h3>
                        <div class="row pt-4 mt-1">
                        <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 p-5 bg-light">
		              <div class="text">
                      <strong class="number" >{{count($hospital)}}</strong>
		                <span>Number of Hospital</span>
		              </div>
		            </div>
		          </div>
                    <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 p-5 bg-light">
                        <div class="text">
                        <strong class="number" >{{count($app)}}</strong>
                            <span>Happy Patients</span>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 p-5 bg-light">
                        <div class="text">
                        <strong class="number" >{{count($doctor)}}</strong>
                            <span>Number of Doctors</span>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 p-5 bg-light">
                        <div class="text">
                        <strong class="number" >{{count($i)}}</strong>
                            <span>Number of Inquiry</span>
                        </div>
                        </div>
                    </div>
                   
                </div>
            </div>
            </div>
            </div>
         
     
        <section class="ftco-services ftco-no-pb" >
                <div class="container" >
                <div class="col-md-12 text-center heading-section ftco-animate">
                <span class="subheading">Services</span>
                <h2 class="mb-4">Our Services</h2>
                </div>
                    <div class="row no-gutters">
                    
                    <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate" >
                        <div class="media block-6 d-block text-center" >
                        <div class="icon d-flex justify-content-center align-items-center">
                                <span class="flaticon-ambulance"></span>
                        </div>
                <div class="media-body p-2 mt-3" >
                    <h3 class="heading">Emergency Help</h3>
                    <p>Emergency Care Program is dedicated to strengthening the emergency care systems that serve as the first point of contact with the health system for so much of the world, and to supporting timely emergency care accessible to all.</p>
                    <!-- <p>Saving time is the first step in saving lives. -->
                </div>
                </div>    
            </div>
            <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
                <div class="media block-6 d-block text-center">
                <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-24-hours"></span>
                </div>
                <div class="media-body p-2 mt-3">
                    <h3 class="heading">24 Hours Service</h3>
                    <p>The hospital provides round-the-clock emergency services, with a facility that is fully equipped and managed by a dedicated team of qualified emergency care professionals. We have developed a special training module for every emergency that may arise.</p>
                </div>
                </div>      
            </div>
            <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
                <div class="media block-6 d-block text-center">
                <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-doctor"></span>
                </div>
                <div class="media-body p-2 mt-3">
                    <h3 class="heading">Qualitfied Doctors</h3>
                    <p>Our doctors are respected for making people feel better and heal when  their ability to save people's lives by dealing with diseases and accidents using the knowledge and training acquired after many years of experience.</p>
                </div>
                </div>      
            </div>
            <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
                <div class="media block-6 d-block text-center">
                <div class="icon d-flex justify-content-center align-items-center">
                        <span class="icon-tint"></span>
                </div>
                <div class="media-body p-2 mt-3">
                    <h3 class="heading">Blood Bank</h3>
                    <p>blood banks collect blood and separate it into its various components so they can be used most effectively according to the needs of the patient. We solve the problem of blood emergencies by connecting blood donors directly with people in blood need.</p>
                </div>
                </div>      
            </div>
            
            </div>
            </div>
        </section> 
       

        <section class="ftco-section bg-light">
            <div class="container">
                <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <span class="subheading">Pricing</span>
                <h2 class="mb-4">Our Pricing</h2>
                <p>For those hospital and bloodbank who need service based feature.</p>
                 </div>
            </div>
                <div class="row" >
                <div class="col-md-4 ftco-animate" >
                    <div class="pricing-entry pb-5 text-center">

                        <div>
                            <h3 class="mb-4" style="color:#dc3545;">Basic</h3>
                            <p><span class="price" style="color:#dc3545;">Rs.100</span> <span class="per"></span></p>
                        </div>
                        <ul>
                             <li> Appointment 1 Time</li>
                        </ul>
                        <div class="panel-body text-center">
                            <form action="{!!route('payment')!!}" method="POST" >
                               
                                <script src="https://checkout.razorpay.com/v1/checkout.js"
                                        data-key="rzp_test_NQtZ8PbCOqwkGs"
                                        data-amount="10000"
                                        data-buttontext="Pay 100 INR"
                                        data-name="Laravelcode"
                                        data-description="Order Value"
                                        data-image="yout_logo_url"
                                        data-prefill.name="name"
                                        data-prefill.email="email"
                                        data-theme.color="#ff7529">
                                </script>
                                <input type="hidden" name="_token" value="{!!csrf_token()!!}">
                            </form>
                </div>
                    </div>
                </div>
               
                <div class="col-md-4 ftco-animate">
                    <div class="pricing-entry active pb-5 text-center">
                        <div>
                            <h3 class="mb-4" style="color:#dc3545;">Premium</h3>
                            <p><span class="price" style="color:#dc3545;">Rs.500</span> <span class="per"></span></p>
                        </div>
                        <ul>
                             <li> Appointment 1 Month</li>
                                 
                        </ul>
                        <div class="panel-body text-center">
                            <form action="{!!route('payment')!!}" method="POST" >
                                
                                <script src="https://checkout.razorpay.com/v1/checkout.js"
                                        data-key="rzp_test_NQtZ8PbCOqwkGs"
                                        data-amount="50000"
                                        data-buttontext="Pay 500 INR"
                                        data-name="Laravelcode"
                                        data-description="Order Value"  
                                        data-image="yout_logo_url"
                                        data-prefill.name="name"
                                        data-prefill.email="email"
                                        data-theme.color="#ff7529">
                                </script>
                                <input type="hidden" name="_token" value="{!!csrf_token()!!}">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 ftco-animate">
                    <div class="pricing-entry active pb-5 text-center">
                        <div>
                            <h3 class="mb-4" style="color:#dc3545;">Platinum</h3>
                            <p><span class="price" style="color:#dc3545;">Rs.1000</span> <span class="per"></span></p>
                        </div>
                        <ul>
                            <li> Appointment 3 Month</li>
                                  
                        </ul>
                       
                            <div class="panel-body text-center">
                                <form action="{!!route('payment')!!}" method="POST" >
                                   
                                    <script src="https://checkout.razorpay.com/v1/checkout.js"
                                            data-key="rzp_test_NQtZ8PbCOqwkGs"
                                            data-amount="100000"
                                            data-buttontext="Pay 1000 INR"
                                            data-name="Organ Transplant"
                                            data-description="Order Value"
                                            data-image="yout_logo_url"
                                            data-prefill.name="Organ"
                                            data-prefill.email="email"
                                            data-theme.color="orange">
                                    </script>
                                    <input type="hidden" name="_token" value="{!!csrf_token()!!}">
                                </form>
                            </div>
                        </a></p>
                    </div>
                </div>
            </div>
            </div>
        </section>
     

        
   
            
		   
        <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5eb8d82d5433140012c37399&product=sticky-share-buttons&cms=sop' async='async'></script>
    @endsection