@extends('hospital.layouts.app')
@section('content')

<div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Doctors</h4>
                    </div>
                   
                </div>
				<div class="row doctor-grid">
                @foreach($data as $datas)
                    <div class="col-md-4 col-sm-4  col-lg-3">
                        <div class="profile-widget">
                            <div class="doctor-img">
                                <a class="avatar" > <img src="{{asset('/images/doctor/logo/'.$datas->image)}}"/></a>
                            </div>
                            <div class="dropdown profile-action">
                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="{{route('hdeletedoctor',['id'=>$datas->id])}}"  onclick="return confirm('Do You Really Want To Delete This Doctor?')"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                    @if($datas->status=='0')
                                        <a href="{{route('docapprove',['id'=>$datas->id,'status'=>'1'])}}" class="btn btn-circle green btn-sm">Approve</a>
                                    @else    
                                        <a href="{{route('docapprove',['id'=>$datas->id,'status'=>'0'])}}" class="btn btn-circle red btn-sm">Dis-Approve</a>
                                    @endif 
                                </div>
                            </div>
                            <h4 class="doctor-name text-ellipsis"><a href="{{route('profile')}}">{{$datas->name}}<br> {{$datas->email}}</a></h4>
                            <div class="doc-prof">specialization: {{$datas->specialization}}<br>Degree : {{$datas->degree}}<br>Status : {{$datas->status}}</div>  
                        </div>
                    </div>
                @endforeach()    
                </div>
				<div class="row">
                    <div class="col-sm-12">
                        <div class="see-all">
                            <a class="see-all-btn" href="javascript:void(0);">Load More</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
		<div id="delete_doctor" class="modal fade delete-modal" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body text-center">
						<img src="{{asset('hospital/assets/img/sent.png')}}" alt="" width="50" height="46">
						<h3>Are you sure want to delete this Doctor?</h3>
						<div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
							<button type="submit" class="btn btn-danger">Delete</button>
						</div>
					</div>
				</div>
			</div>
        </div>
      
@endsection