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
                                </div>
                                <div class="portlet-body form">

                                @if($errors->any())
                                    @include('errors.error')
                                @endif

                                <form role="form" method="post" action="{{route('addhospital')}}" enctype="multipart/form-data">
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
                                                <label for="exampleInputFile1">Add Hospital Logo</label>
                                                <input type="file" id="exampleInputFile1" name="image">
                                                <p class="help-block"> File Format (.jpeg .jpg or .png) </p>
                                        </div>
                                            <div class="form-group">
                                                <label>Name</label>
                                                <div class="input-group">
                                                    <input type="name" class="form-control" name="name" placeholder="Enter Name">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-user font-red"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label>Email Address</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="email" placeholder="Email Address">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-envelope font-red"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label> Contact No.</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="contact_no" placeholder="Contact Number">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-phone font-red"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label> Address</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="address" placeholder="Address">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-map-marker font-red"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Password</label>
                                                <div class="input-group">
                                                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-circle font-red"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label> Contact Person's Name</label>
                                                <div class="input-group">
                                                    <input type="name" class="form-control" name="contact_person_name" placeholder="Contact Person's Full Name">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-user font-red"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label> Contact Person's Mobile No.</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="contact_person_mobile_no" placeholder="Mobile Number">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-phone font-red"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label> Description</label>
                                                <textarea id="editor1" name="description" rows="3" class="form-control" placeholder="Description"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputFile1">Hospital License Images</label>
                                                <input type="file" id="exampleInputFile1" name="images[]" multiple="multiple">
                                                <p class="help-block"> File Format (.jpeg .jpg or .png) </p>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <button type="submit" class="btn btn-success">Submit</button>
                                            <button type="button" class="btn default">Cancel</button>
                                        </div>
                                    </form>
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