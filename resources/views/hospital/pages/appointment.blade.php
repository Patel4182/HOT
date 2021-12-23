@extends('hospital.layouts.app')  
    @section('content')

<div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Appointments</h4>
                    </div>
                    
                </div>
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-striped custom-table">
								<thead>
									<tr>
                                                <th>ID</th> 
                                               <th>Doctor Name</th>
                                               <th>Patient Name</th>
                                               <th>Email</th>
                                               <th>Contact No</th>
                                               <th>Gender</th>
                                               <th>Age</th>
                                               <th>City</th>
                                               <th>Appointment Date</th>
                                               <th>Appointment Time</th>
                                               <th>Status</th>
                                              
                                               <th class="text-right">Action</th>
                                               
									</tr>
								</thead>
								<tbody>
                                @foreach($app as $appointment)
                                            <tr class="odd gradeX">
                                            <td>{{$appointment->id}} </td>
                                              
                                                <td>{{$appointment->doctor->name}} </td>
                                                <td>{{$appointment->fullname}} </td>
                                                <td>{{$appointment->email}} </td>
                                                <td>{{$appointment->contact_no}} </td>
                                                <td>{{$appointment->gender}} </td>
                                                <td>{{$appointment->age}} </td>
                                                <td>{{$appointment->city}} </td>
                                                <td>{{$appointment->prefer_date}} </td>
                                                <td>{{$appointment->prefer_time}} </td>
                                                <td>{{$appointment->status}}</td>
                                                
                                                </td>
                                                
                                                <td class="text-right">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="{{route('deleteappointment',['id'=>$appointment->id])}}" onclick="return confirm('Do You Really Want To Delete This Appointment?')"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                            @if($appointment->status=='pending')
                                                            <a href="{{route('appapprove',['id'=>$appointment->id,'status'=>'Finished'])}}" class="dropdown-item">Finished</a>
                                                             @else    
                                                            <a href="{{route('appapprove',['id'=>$appointment->id,'status'=>'pending'])}}" class="dropdown-item">Pending</a>
                                                            @endif   
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
								</tbody>
							</table>
						</div>
					</div>
                </div>
            </div>	
		</div>
        @endsection