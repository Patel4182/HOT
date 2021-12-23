@extends('front.layouts.app')  
 @section('content')
	
		<section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6 py-5 pr-md-5">
	          <div class="heading-section">
	          	
	            <h2 class="mb-4">Book an Apoointment</h2>
	            <p>For more details check your mail after succesfully submit this form. </div>
	          <form action="{{route('appointment')}}" method="post" class="login-form" >
						{{csrf_field()}}
			  <div class="d-md-flex">
	    					<div class="form-group">
		    					<div class="form-field">
          					<div class="select-wrap">
                      	<select class="form-control input-xlarge" name="hname">
                            <option value="0" readonly>Select Hospital</option>
                                @foreach($hospital as $hospitals)
                                    <option value="{{$hospitals->id}}">{{$hospitals->name}}</option>
                                @endforeach
                        </select>
                    	</div>
		              	</div>
		    				</div>
	    					<div class="form-group ml-md-4">
					
							<select class="form-control input-xlarge" name="doctor">
                            <option value="0" readonly>Select Doctor</option>
                                @foreach($doctor as $doctors)
                                    <option value="{{$doctors->id}}">{{$doctors->name}}</option>
                                @endforeach
                        	</select>
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<input type="text" class="form-control" placeholder="Name" name="fullname">
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<input type="text" class="form-control" placeholder="Email" name="email">
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<input type="text" class="form-control" placeholder="Contact No" name="contact_no">
		    				</div>
		    				<div class="form-group ml-md-4">
								<div class="form-group">
                                    <label> Gender:</label>
                                    <input type="radio" name="gender" value="male"> Male
                                    <input type="radio" name="gender" value="female"> Female
                                </div>
		    				</div>
	    				</div>
						<div class="d-md-flex">
		    				<div class="form-group">
		    					<input type="text" class="form-control" placeholder="Age" name="age">
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<input type="text" class="form-control" placeholder="City" name="city">
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<div class="input-wrap">
		            		<div class="icon"><span class="ion-md-calendar"></span></div>
		            		<input type="text" class="form-control appointment_date" placeholder="Date" name="prefer_date">
	            		</div>
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<div class="input-wrap">
		            		<div class="icon"><span class="ion-ios-clock"></span></div>
		            		<input type="text" class="form-control appointment_time" placeholder="Time" name="prefer_time">
	            		</div>
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
	    					<div class="form-group">
		              <textarea  id="" cols="30" rows="2" class="form-control" placeholder="Message" name="message"></textarea>
		            </div>
		            <div class="form-group ml-md-4">
		              <input type="submit" value="Appointment" class="btn btn-danger py-3 px-4">
		            </div>
	    				</div>
	    			</form>
    			</div>
    			<div class="col-lg-6 p-5 bg-counter aside-stretch">
						<h3 class="vr">Make   Appointment</h3>
    				<div class="row pt-4 mt-1">
		          <img src="{{asset('front/images/1.jpg')}}" style="height:550px;"/>
	          </div>
          </div>
        </div>
    	</div>
    </section>
@endsection