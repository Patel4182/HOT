@extends('front.layouts.app')  
 @section('content')

	<section class="ftco-section ftco-no-pt">
                <div class="container">
                    <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
               
                <h2 class="mb-4">Our Qualified Bloodbanks</h2>
                <p>Your good health is our greatest achievement.</p></div>
                </div>	
                    <div class="row">
                    @foreach($blood as $b)                       
                    <div class="col-md-6 col-lg-3 ftco-animate">
                            <div class="staff">
                                <div class="img-wrap d-flex align-items-stretch">
                                    <div class="img align-self-stretch"  style="background-image: url('{{asset('/images/bloodbank/logo/'.$b->image)}}');"></div>
                                </div>
                                <div class="text pt-3 text-center">
                                    <h3>{{$b->name}}</h3>
                                    <span class="position mb-2">{{$b->email}}</span>
									<span class="position mb-2">{{$b->contactno}}</span>
                                   <!-- <a href="{{route('fstock')}}"><button class="btn btn-danger">View Stock</button></a> -->
                                   <button type="button"  class="btn btn-danger px-6 py-3 mt-3" data-toggle="modal" data-target="#exampleModal4" data-whatever="@fat">
				                   View Stock
			                        </button>
                                </div>
                            </div>
                        </div>
                    @endforeach()
                      
     
            </section>
            </div>
        <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Bloodbank Stock</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				@if($errors->any())
                    @include('errors.error')
                @endif
               
						<div class="table-responsive">
							<table class="table table-striped custom-table">
								<thead>
									<tr>
                                  
                                                        <th>group Name</th>
                                                        <th>No. of bottle</th>
                                                        <th>Remaining bottle</th>
                                                        <th>Summary</th>
                                                       
									</tr>
								</thead>
								<tbody>
                                @foreach($stock as $s)
                                                                <tr class="odd gradeX">
                                                                   
                                                              
                                                                <td>{{$s->groupname}} </td>
                                                                <td>{{$s->no_of_bottle}} </td>
                                                                <td>{{$s->remaining_bottle}} </td>
                                                                <td>{{$s->summary}} </td>
                                                               
                                                               </tr>
                                                            @endforeach
								</tbody>
							</table>
					
			</div>
		</div>
	</div>
</div>
 @endsection