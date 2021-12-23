@extends('bloodbank.layouts.app')
    @section('content')
   
        <div class="container-fluid">
            <div class="row clearfix">
            @foreach($blood as $bloods)
                <div class="col-xs-12 col-sm-3">
                    <div class="card profile-card">
                        <div class="profile-header" style="background-color:white;">&nbsp;</div>
                       
                        <div class="profile-body">
                            <div class="image-area">
                                <img src="{{asset('/images/Bloodbank/logo/'.$bloods->image)}}" style="height:150px;weight:150px;" alt="AdminBSB - Profile Image" />
                            </div>
                            <div class="content-area">
                                <h3>{{Auth::user()->name}}</h3>
                                <p>Blood Bank<br>
                                {{$bloods->email}}</p>
                            </div>
                        </div>
                      
                    </div>


                </div>
            @endforeach
                <div class="col-xs-12 col-sm-9">
                    <div class="card">
                        <div class="body">
                            <div>
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#addstock" aria-controls="home" role="tab" data-toggle="tab">Add Stock</a></li>
                                    <li role="presentation"><a href="#viewstock" aria-controls="settings" role="tab" data-toggle="tab">View Stock </a></li>
                                    </ul>

                                <div class="tab-content active">
                                    <div role="tabpanel" class="tab-pane fade in" id="addstock">
                                        <form class="form-horizontal" method="POST" action="{{route('addstock')}}">
                                        {{csrf_field()}}
                                            <div class="form-group">
                                                <label for="groupname" class="col-sm-2 control-label">Group Name</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control"  name="groupname" placeholder="groupname" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="no_of_bottle" class="col-sm-2 control-label">No. Of Bottle</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control"  name="no_of_bottle" placeholder="no_of_bottle" required>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            <div class="form-group">
                                                <label for="remaining_bottle" class="col-sm-2 control-label">Remaining Bottle</label>

                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control"  name="remaining_bottle" placeholder="remaining_bottle">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="summary" class="col-sm-2 control-label">Summary</label>

                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <textarea class="form-control" name="summary" rows="5" placeholder="summary"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                    <button type="submit" class="btn btn-danger">SUBMIT</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    
                                    <div role="tabpanel" class="tab-pane fade in" id="viewstock">
                                    
                                    <div class="body table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                   
                                                    <th>Group Name</th>
                                                    <th>No. Of Bottle</th>
                                                    <th>Remaining Bottle</th>
                                                    <th>Summary<th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($stock as $stocks)
                                                <tr>
                                                    <td>{{$stocks->groupname}}</td>
                                                    <td>{{$stocks->no_of_bottle}}</td>
                                                    <td>{{$stocks->remaining_bottle}}</td>
                                                    <td>{{$stocks->summary}}</td>
                                                </tr>
                                            @endforeach    
                                            </tbody>
                                        </table>
                                    </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  
    @endsection