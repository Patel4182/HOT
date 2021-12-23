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
                                        <span class="caption-subject bold uppercase"> Hospital Table</span>
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
                                                <th>LOGO</th>
                                                <th>City</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Contact No.</th>
                                                <th>ContactP Name</th>
                                                <th>ContactP Mobile No.</th>
                                                <th>Status</th>
                                                <th>Image</th>
                                                <th>Action</th> 
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($hospital as $hospitals)

                                            <tr class="odd gradeX">
                                                
                                                <td>{{$hospitals->id}} </td>
                                                 <td><img src="{{asset('/images/hospital/logo/'.$hospitals->image)}}" height="100" width="100"></td>
                                                <td>{{$hospitals->cities->city}} </td>
                                                <td>{{$hospitals->name}} </td>
                                                <td>{{$hospitals->email}} </td>
                                                <td>{{$hospitals->contact_no}} </td>
                                                <td>{{$hospitals->contact_person_name}} </td>
                                                <td>{{$hospitals->contact_person_mobile_no}} </td>
                                                <td>{{$hospitals->status}} </td>
                                                <td>
                                                    <a href="{{route('viewimage',['id'=>$hospitals->id])}}">
                                                        <button class="btn btn-outline blue btn-sm">
                                                            <i class="fa fa-image"></i>
                                                        </button>                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="{{route('deletehospital',['id'=>$hospitals->id])}}" onclick="return confirm('Do You Really Want To Delete This Hospital?')">
                                                        <button type="button" class="btn btn-outline red btn-sm">
                                                            <i class="fa fa-trash-o"></i>
                                                                </button>
                                                            </a>
                                                            <a href="{{route('edithospital',['id'=>$hospitals->id])}}">
                                                                <button type="button" class="btn btn-outline green btn-sm">
                                                                    <i class="fa fa-pencil"></i>
                                                                </button>
                                                            </a>
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