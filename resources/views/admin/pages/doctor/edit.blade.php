@extends('admin.layouts.app')  
    @section('content')
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <h3 class="page-title"> Forms
                        <small>Form controls and more</small>
                    </h3>
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <i class="icon-home"></i>
                                <a href="dashboard">Home</a>
                                <i class="fa fa-angle-right"></i>
                            </li>
                            <li>
                                <span>Doctors</span>
                            </li>
                        </ul>
                        
                    </div>
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN SAMPLE FORM PORTLET-->
                            <div class="portlet light ">
                                <div class="portlet-title">
                                    <div class="caption font-red-sunglo">
                                        <i class="icon-settings font-red-sunglo"></i>
                                        <span class="caption-subject bold uppercase"> Doctors</span>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                @if($errors->any())
                                    @include('errors.error')
                                @endif
                                @foreach($doctor as $doctor)
                                <form role="form" method="post" action="{{route('editdoctor',['id'=>$doctor->id])}}">
                                {{csrf_field()}}
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label>Select Hospital</label>
                                                <select class="form-control input-xlarge" name="city">
                                                     <option value="0" readonly>Select Hospital</option>
                                                     @foreach($hospital as $hospitals)
                                                        <option value="{{$hospitals->id}}">{{$hospitals->name}}</option>
                                                     @endforeach
                                                </select>
                                            </div>
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
                                                    <input type="name" class="form-control" name="name" placeholder="Full Name" value="{{$doctor->name}}">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-user-md font-red"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label> Birth Date</label>
                                                    <input type="date" class="form-control" name="bdate" placeholder="Birth Date" value="{{$doctor->bdate}}">
                                            </div>
                                            <div class="form-group">
                                                <label> Gender:</label>
                                                    <input type="radio" name="gender" value="{{$doctor->gender}}"> Male
                                                    <input type="radio" name="gender" value="{{$doctor->gender}}"> Female
                                            </div>
                                            <div class="form-group">
                                                <label> Contact No.</label>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="contact_no" placeholder="Contact Number" value="{{$doctor->contact_no}}">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-phone font-red"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label> Specialization</label>
                                                    <input type="text" class="form-control" name="specialization" placeholder="Specialization" value="{{$doctor->specialization}}">
                                            </div>
                                            <div class="form-group">
                                                <label> Degree</label>
                                                    <input type="text" class="form-control" name="degree" placeholder="Degree" value="{{$doctor->degree}}">
                                            </div>
                                            <div class="form-group">
                                                <label> Experience</label>
                                                    <input type="name" class="form-control" name="experience" placeholder="Experience" value="{{$doctor->experience}}">
                                            </div>
                                            <div class="form-group">
                                                <label>Email Address</label>
                                                <div class="input-group">
                                                    <input type="email" class="form-control" name="email" placeholder="Email Address" value="{{$doctor->email}}">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-envelope font-red"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label> Description</label>
                                                <textarea id="editor1" name="editor1" name="description" rows="3" class="form-control" placeholder="Description" value="{{$doctor->description}}"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputFile1">Add Image Here</label>
                                                <input type="file" id="exampleInputFile1" name="image" value="{{$doctor->image}}">
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