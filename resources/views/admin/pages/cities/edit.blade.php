@extends('admin.layouts.app')  
     @section('content')
         <!-- BEGIN CONTENT -->
         <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                   
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN SAMPLE FORM PORTLET-->
                            <div class="portlet light ">
                                <div class="portlet-title">
                                    <div class="caption font-red-sunglo">
                                        <i class="icon-settings font-red-sunglo"></i>
                                        <span class="caption-subject bold uppercase"> Cities</span>
                                    </div>
                                    <div class="actions">
                                        <div class="btn-group">
                                            <a class="btn btn-sm green dropdown-toggle" href="javascript:;" data-toggle="dropdown"> Actions
                                                <i class="fa fa-angle-down"></i>
                                            </a>
                                            <ul class="dropdown-menu pull-right">
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-pencil"></i> Edit </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-trash-o"></i> Delete </a>
                                                </li>
                                                <li>
                                                    <a href="javascript:;">
                                                        <i class="fa fa-eye"></i> View </a>
                                                </li>
                                                <li class="divider"> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                @foreach($city as $cities)
                                <form role="form" method="post" action="{{route('editcities',['id'=>$cities->id])}}">
                                {{csrf_field()}}
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">City</label>
                                                <div class="input-group">
                                                    <input type="name" class="form-control" name="city" placeholder="City" value="{{$cities->city}}">                                                    <span class="input-group-addon">
                                                        <i class="fa fa-user font-red"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            
                                        <div class="form-actions">
                                            <button type="submit" class="btn blue">Submit</button>
                                            <button type="button" class="btn default">Cancel</button>
                                        </div>
                                    </form>
                                    @endforeach
                                </div>
                            </div>
                            <!-- END SAMPLE FORM PORTLET-->
                        </div>
                    </div>
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
     @endsection