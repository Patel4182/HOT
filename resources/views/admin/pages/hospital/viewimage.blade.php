@extends('admin.layouts.app') 
@section('content')
<!-- BEGIN CONTENT BODY -->
<div class="page-content">
    <!-- BEGIN PAGE HEADER-->
    <h3 class="page-title">Hospital images</h3>
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <i class="icon-home"></i>
                <a href="index.html">Home</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <a href="#">Tables</a>
                <i class="fa fa-angle-right"></i>
            </li>
            <li>
                <span>Hospital images</span>
            </li>
        </ul>
    </div>
    <!-- END PAGE HEADER-->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet light ">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <i class="icon-settings font-dark"></i>
                        <span class="caption-subject bold uppercase"> Hospital images</span>
                    </div>
                    <button type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#myModal" style="float:right;">Add New Image</button>
                </div>
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Hospital</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($img as $hospital)
                            <tr>
                                <td>{{$hospital->id}}
                                <td>{{$hospital->hospital->name}}
                                <td>
                                    <img src="{{asset('/images/hospital/images/'.$hospital->image)}}" height="100" width="100">
                                </td>
                                <td>
                                    <a href="#" onclick="return confirm('Do You Really Want To Delete This Image?')">
                                        <button type="button" class="btn btn-outline red btn-sm">
                                            <i class="fa fa-trash-o"></i>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- END CONTENT BODY -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <form method="POST" enctype="multipart/form-data">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Image</h4>
                    </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Add Image</label>
                        <input type="file" class="form-control" name="images">
                    </div> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default btn-md" data-dismiss="modal">Close</button></a>
                    <button type="submit" class="btn btn-success btn-md">Submit</button></a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection