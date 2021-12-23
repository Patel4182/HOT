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
                                        <span class="caption-subject bold uppercase"> City Table</span>
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
                                                <th> ID </th>
                                                <th> CITY </th>
                                                <th> Actions </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($city as $cities)
                                            <tr class="odd gradeX">
                                                <td>
                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                        <input type="checkbox" class="checkboxes" value="1" />
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td> {{$cities->id}} </td>
                                                <td> {{$cities->city}} </td>
                                                <td>        
                                                    <a href="{{route('deletecities',['id'=>$cities->id])}}" onclick="return confirm('Do You Really Want To Delete This City?')">
                                                        <button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                                    </a>
                                                    <a href="{{route('editcities',['id'=>$cities->id])}}">
                                                        <button class="btn btn-success"><i class="fa fa-edit"></i></button>
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