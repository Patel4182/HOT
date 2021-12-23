@extends('doctor.layouts.app')  
    @section('content')
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Organs</h4>
                                <p class="text-muted m-b-15 f-s-12">Add Need & Require Organs Details</p>
                                <div class="basic-form">
                                @if($errors->any())
                                    @include('errors.error')
                                @endif
                                    <form role="form" method="post" action="{{route('addorgan')}}" enctype="multipart/form-data">
                                    {{csrf_field()}}    
                                        <div class="form-group">
                                            <label>Select Hospital</label>
                                            <select class="form-control" name="hospital">
                                                <option value="0" readonly>Select Hospital</option>
                                                @foreach($hospitals as $hospital)
                                                    <option value="{{$hospital->id}}">{{$hospital->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Select Doctor</label>
                                            <select class="form-control" name="doctor">
                                                <option value="0" readonly>Select Doctor</option>
                                                @foreach($doctors as $doctor)
                                                    <option value="{{$doctor->id}}">{{$doctor->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Organ Name:</label>
                                            <input type="text" class="form-control" name="organ_name" placeholder="Organ Name">
                                        </div>
                                        <div class="form-group">
                                            <label>Description:</label>
                                            <textarea class="form-control h-150px" name="description" rows="6" id="comment"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Add Image:</label>
                                            <input type="file" name="image" class="form-control-file">
                                        </div>
                                        <div class="form-group">
                                            <label>Select Category</label>
                                            <select class="form-control" name="status">
                                                <option value="0" readonly>Select Category</option>
                                                <option value="1">Need</option>
                                                <option value="2">Require</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-dark">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    @endsection