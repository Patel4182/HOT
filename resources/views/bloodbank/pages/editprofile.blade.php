@extends('bloodbank.layouts.app')
    @section('content')
   
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-3">
                    <div class="card profile-card">
                        <div class="profile-header">&nbsp;</div>
                        <div class="profile-body">
                           
                            <div class="content-area">
                                <h3>{{Auth::user()->name}}</h3>
                                <p>Blood Bank</p>
                            </div>
                        </div>
                       
                    </div>

                </div>
                <div class="col-xs-12 col-sm-9">
                    <div class="card">
                        <div class="body">
                        <div class="tab-content">
                        <form class="form-horizontal" method="post" action="{{route('bprofile')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                                            <div class="form-group">
                                                <label for="name" class="col-sm-3 control-label">Name</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id="name" name="name" placeholder="name" readonly value="{{Auth::user()->name}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="email" class="col-sm-3 control-label">Email</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                        <input type="email" class="form-control" id="email" name="email" placeholder="email" readonly value="{{Auth::user()->email}}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="contactno" class="col-sm-3 control-label">Contact No.</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id="contactno" name="contactno" placeholder="contactno" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="address" class="col-sm-3 control-label">Address</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                    <textarea class="form-control" name="address" rows="2" placeholder="address"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="contact_person_name" class="col-sm-3 control-label">Contact Person Name</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id="contact_person_name" name="contact_person_name" placeholder="contact person name" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="contact_person_mobile_no" class="col-sm-3 control-label">Contact Person Contact No.</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id="contact_person_mobile_no" name="contact_person_mobile_no" placeholder="contact person mobile no" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="description" class="col-sm-3 control-label">Discription</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                    <textarea class="form-control" id="editor1" name="description" rows="10" placeholder="description"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="image" class="col-sm-3 control-label">Image</label>
                                                <div class="col-sm-9">
                                                    <div class="form-line">
                                                    <input type="file" id="exampleInputFile1" name="image">
                                               
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-offset-3 col-sm-9">
                                                    <button type="submit" class="btn btn-Info">Update</button>
                                                    <button type="submit" class="btn btn-info">Cancel</button>
                                                </div>
                                                
                                            </div>
                                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  
    @endsection