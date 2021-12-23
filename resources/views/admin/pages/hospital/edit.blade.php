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
                                        <span class="caption-subject bold uppercase"> Hospitals</span>
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
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                @foreach($hospital as $hospital)
                                <form role="form" method="post" action="{{route('edithospital',['id'=>$hospital->id])}}">
                                {{csrf_field()}}
                                        <div class="form-body">
                                        <div class="form-group">
                                                <label>Select City</label>
                                                <select class="form-control input-xlarge" name="city">
                                                    <option value="0" readonly>Select City</option>
                                                    @foreach($cities as $city)
                                                    <option value="{{$city->id}}">{{$city->city}}</option>
                                                    @endforeach
                                                </select>
                                        </div>
                                            <div class="form-group">
                                                <label>Name</label>
                                                <div class="input-group">
                                                    <input type="name" class="form-control" name="name"  placeholder="Enter Hospital Name" value="{{$hospital->name}}">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-user font-red"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Email Address</label>
                                                <div class="input-group">
                                                    <input type="email" class="form-control" name="email" placeholder="Email Address" value="{{$hospital->email}}">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-envelope font-red"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label> Contact No.</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="contact_no" placeholder="Contact Number" value="{{$hospital->contact_no}}">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-phone font-red"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label> Address</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="address" placeholder="Address" value="{{$hospital->address}}">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-map-marker font-red"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Password</label>
                                                <div class="input-group">
                                                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" value="{{$hospital->password}}">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-circle font-red"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label> Contact Person's Name</label>
                                                <div class="input-group">
                                                    <input type="name" class="form-control" name="contact_person_name" placeholder="Contact Person's Full Name" value="{{$hospital->contact_person_name}}">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-user font-red"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label> Contact Person's Mobile No.</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="contact_person_mobile_no" placeholder="Mobile Number" value="{{$hospital->contact_person_mobile_no}}">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-phone font-red"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label> Description</label>
                                                <textarea id="editor1" name="description" rows="3" class="form-control" placeholder="Description" value="{{$hospital->description}}"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputFile1">Hospital license Images</label>
                                                <input type="file" id="exampleInputFile1" name="image">
                                                <p class="help-block"> File Format (.jpeg .jpg or .png) </p>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <button type="submit" class="btn btn-success">Submit</button>
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