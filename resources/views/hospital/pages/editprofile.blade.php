@extends('hospital.layouts.app')
@section('content')
<div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Edit Profile</h4>
                    </div>
                </div>
                <form role="form" method="POST" >
                    {{csrf_field()}}
                    <div class="card-box">
                        <h3 class="card-title">Basic Informations</h3>
                        <div class="row">
                        @foreach($hospital as $hospitals)
                            <div class="col-md-12">
                                <div class="profile-img-wrap">
                                <img class="avatar" src="{{asset('/images/hospital/logo/'.$hospitals->image)}}" alt="">
                                    <div class="fileupload btn">
                                        <span class="btn-text">edit</span>
                                        <input class="upload" type="file" name="image">
                                    </div>
                                </div>
                                <div class="profile-basic">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <label class="focus-label">Hospital Name</label>
                                                <input type="text" name="name" class="form-control floating"  value="{{$hospitals->name}}">
                                            </div>
                                        </div>
                                       
                                        <div class="col-md-6">
                                            <div class="form-group form-focus">
                                                <label class="focus-label">Phone</label>
                                                <input type="text"  name="contact_no" class="form-control floating" value="{{$hospitals->contact_no}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-focus select-focus">
                                                <label class="focus-label">Select City</label>
                                                <select class="select form-control floating" name="city">
                                                @foreach($cities as $city)
                                                        <option value="{{$city->id}}">{{$city->city}}</option>
                                                     @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       
                       
                       </div>
                    </div>
                    <div class="card-box">
                        <h3 class="card-title">Contact Informations</h3>
                        <div class="row">
                        <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Email</label>
                                    <input type="text" name="email" class="form-control floating" value="{{$hospitals->email}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Address</label>
                                    <input type="text" name="address" class="form-control floating" value="{{$hospitals->address}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Contact person's name</label>
                                    <input type="text" name="contact_person_name"class="form-control floating" value="{{$hospitals->contact_person_name}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">Contact person's Mobile no.</label>
                                    <input type="text" name="contact_person_mobile_no" class="form-control floating" value="{{$hospitals->contact_person_mobile_no}}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="focus-label">description</label>
                                    <input type="text"  name="description" class="form-control floating" value="{{$hospitals->description}}">
                                </div>
                            </div>
                            
                        </div>
                    </div>
                   
                    <div class="text-center m-t-20">
                        <button class="btn btn-primary submit-btn" type="submit">Save</button>
                    </div>
                    @endforeach
                </form>
            </div>
        </div>
           
    </div>
@endsection
