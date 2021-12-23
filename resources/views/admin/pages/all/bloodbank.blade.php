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
                                        <span class="caption-subject bold uppercase">Bloodbank Table</span>
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
                                                <th>LOGO</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Contact No.</th>
                                                <th>Address</th>
                                                <th>Contact  person's  Name</th>
                                                <th>Contact person's Mobile No.</th>
                                                <th>description</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                                <th>Delete</th>  
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($blood as $bloods)
                                            <tr class="odd gradeX">
                                                <td>
                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                           <input type="checkbox" class="checkboxes" value="1" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td><img src="{{asset('/images/bloodbank/logo/'.$bloods->image)}}" height="100" width="100"></td>
                                                <td>{{$bloods->name}} </td>
                                                <td>{{$bloods->email}} </td>
                                                <td>{{$bloods->contactno}} </td>
                                                <td>{{$bloods->address}} </td>
                                                <td>{{$bloods->contact_person_name}} </td>
                                                <td>{{$bloods->contact_person_mobile_no}} </td>
                                                <td>{{$bloods->description}} </td>
                                                <td>{{$bloods->status}} </td>
                                               <td>
                                               @if($bloods->status=='0')
                                                    <a href="{{route('bapprove',['id'=>$bloods->id,'status'=>'1'])}}" class="btn btn-circle green btn-sm">Approve</a>
                                                @else    
                                                    <a href="{{route('bapprove',['id'=>$bloods->id,'status'=>'0'])}}" class="btn btn-circle red btn-sm">Dis-Approve</a>
                                                @endif 
                                               </td>
                                                <td>
                                                    <a href="{{route('deletebloodbank',['id'=>$bloods->id])}}"  onclick="return confirm('Do You Really Want To Delete This Bloodbank?')">
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