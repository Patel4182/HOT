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
                                        <span class="caption-subject bold uppercase">Doctor Table</span>
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
                                               
                                                <th>ID</th>
                                                <th>City</th>
                                                <th>Hospital</th>
                                                <th>Name</th>
                                                <th>BirthDate</th>
                                                <th>Gender</th>
                                                <th>Contact No</th>
                                                <th>Specialization</th>
                                                <th>Degree</th>
                                                <th>Experience</th>
                                                <th>Email</th>
                                                <th>Image</th>
                                                <th>Status</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($doctor as $doctors)
                                            <tr class="odd gradeX">
                                               
                                                <td>{{$doctors->id}} </td>
                                                <td>{{$doctors->cities->city}} </td>
                                                <td>{{$doctors->hospital->name}}</td>
                                                <td>{{$doctors->name}} </td>
                                                <td>{{$doctors->bdate}} </td>
                                                <td>{{$doctors->gender}} </td>
                                                <td>{{$doctors->contact_no}} </td>
                                                <td>{{$doctors->specialization}} </td>
                                                <td>{{$doctors->degree}} </td>
                                                <td>{{$doctors->experience}} </td>
                                                <td>{{$doctors->email}} </td>
                                                <td><img src="{{asset('/images/doctor/logo/'.$doctors->image)}}" height="100" width="100"></td>
                                                <td>{{$doctors->status}} </td>
                                               <td>
                                               <a href="{{route('editdoctor',['id'=>$doctors->id])}}" >
                                               <button type="button" class="btn btn-outline green btn-sm">
                                                                    <i class="fa fa-pencil"></i>
                                                                </button></a></td>
                                                <td>
                                                    <a href="{{route('deletedoctor',['id'=>$doctors->id])}}"  onclick="return confirm('Do You Really Want To Delete This Doctor?')">
                                                    <button type="button" class="btn btn-outline red btn-sm">
                                                            <i class="fa fa-trash-o"></i>
                                                                </button> </a>
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