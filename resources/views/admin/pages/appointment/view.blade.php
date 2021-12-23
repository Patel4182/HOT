@extends('admin.layouts.app')  
    @section('content')
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
                  
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light ">
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <i class="icon-settings font-dark"></i>
                                        <span class="caption-subject bold uppercase">Appoinment Table</span>
                                    </div>
                                    <div>
                                                <div class="btn-group pull-right">
                                                    <button class="btn green  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu pull-right">
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-print"></i> Print </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:;">
                                                                <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                </div>
                                    <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                        <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                                        <span></span>
                                                    </label>
                                                </th>
                                                <th>ID</th>
                                                <th>Hospital</th>
                                                <th>Doctor</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Contact No</th>
                                                <th>Gender</th>
                                                <th>Age</th>
                                                <th>City</th>
                                                <th>Prefered Date</th>
                                                <th>Prefered Time</th>
                                                <th>Message</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($appointment as $appointment)
                                            <tr class="odd gradeX">
                                                <td>
                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                           <input type="checkbox" class="checkboxes" value="1" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td>{{$appointment->id}} </td>
                                                <td>{{$appointment->hospital->name}}</td>
                                                <td>{{$appointment->doctor->name}} </td>
                                                <td>{{$appointment->fullname}} </td>
                                                <td>{{$appointment->email}} </td>
                                                <td>{{$appointment->contact_no}} </td>
                                                <td>{{$appointment->gender}} </td>
                                                <td>{{$appointment->age}} </td>
                                                <td>{{$appointment->city}} </td>
                                                <td>{{$appointment->prefer_date}} </td>
                                                <td>{{$appointment->prefer_time}} </td>
                                                <td>{{$appointment->message}} </td>
                                                <td>{{$appointment->status}}</td>
                                                <td>
                                                @if($appointment->status=='pending')
                                                    <a href="{{route('appapprove',['id'=>$appointment->id,'status'=>'Finished'])}}" class="btn btn-outline red btn-sm">Finished</a>
                                                @else    
                                                <a href="{{route('appapprove',['id'=>$appointment->id,'status'=>'pending'])}}" class="btn btn-outline green btn-sm">Pending</a>
                                                     @endif   
                                                </td>
                                                <td>
                                                    <a href="{{route('deleteappointment',['id'=>$appointment->id])}}" onclick="return confirm('Do You Really Want To Delete This City?')"><button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                                    </a>
                                                    <button type="button" class="btn btn-outline yellow btn-sm"><a href="{{route('appreply',['id'=>$appointment->id])}}"><i class="fa fa-reply"></i></a></button>
                                                
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>
        </div>
        <!-- END CONTENT BODY -->
    @endsection