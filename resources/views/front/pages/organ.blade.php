@extends('front.layouts.app')  
 @section('content')
	
 <section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter" style="background-color:	#CD5C5C;" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6 py-5 pr-md-5">
	          <div class="heading-section heading-section-white ftco-animate mb-5">
	          	<span class="subheading">Organ Details</span>
	            <h2 class="mb-4">Make a Request For Organs</h2>
	            <p>Add Need & Donate Organs Details.</p>
				</div>
	          <form action="{{route('org')}}" method="post"  class="appointment-form ftco-animate">
						{{csrf_field()}}
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<input type="text" class="form-control"  placeholder="Organ Name (e.g. kidney)" name="organ_name">
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<input type="text" class="form-control" name="name" placeholder="Your Name">
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
	    					<div class="form-group">
		    					<div class="form-field">
          					<div class="select-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down" ></span></div>
                      <select  name="status" id="" class="form-control" >
                      	<option value="" style="background-color:#FF9999;">Select Your Category</option>
						  <option value="need" style="background-color:#FF9999;">Need</option>
                          <option value="donate" style="background-color:#FF9999;">Donate</option>
                      </select>
                    </div>
		              </div>
		    				</div>
	    					<div class="form-group ml-md-4">
		    					<input type="text" class="form-control" placeholder="Phone" name="contact_no">
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
		    				<div class="form-group">
		    					<div class="input-wrap">
								<input type="text" class="form-control" placeholder="Email" name="email">
	            		</div>
		    				</div>
		    				<div class="form-group ml-md-4">
		    					<div class="input-wrap">
		            		
	            		</div>
		    				</div>
	    				</div>
	    				<div class="d-md-flex">
	    					<div class="form-group">
		              <textarea id="" cols="30" rows="2" class="form-control" placeholder="Message" name="description"></textarea>
		            </div>
		            <div class="form-group ml-md-4" >
					<input type="submit" value="Submit" class="btn btn-danger px-4 py-3 mt-3" >
		            </div>
	    				</div>
	    			</form>
    			</div>
    			<div class="col-lg-6 p-5 bg-counter aside-stretch">
						<h3 class="vr">About Organ Transplant </h3>
    				<div class="row pt-4 mt-1">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-striped custom-table">
								<thead>
									<tr>
                                  
                                                        <th>organ Name</th>
                                                        <th>Status</th>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Contact No</th>
                                                        <th>Message</th>
                                                       
									</tr>
								</thead>
								<tbody>
                                @foreach($organ as $organs)
                                                                <tr class="odd gradeX">
                                                                   
                                                              
                                                                <td>{{$organs->organ_name}} </td>
                                                                <td>{{$organs->status}} </td>
                                                                <td>{{$organs->name}} </td>
                                                                <td>{{$organs->email}} </td>
                                                                <td>{{$organs->contact_no}} </td>
                                                                <td>{{$organs->description}} </td>
                                                               </tr>
                                                            @endforeach
								</tbody>
							</table>
						</div>
					</div>
	          </div>
          </div>
        </div>
    	</div>
    </section>
@endsection