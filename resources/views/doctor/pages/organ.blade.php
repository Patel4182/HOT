@extends('Doctor.layouts.app')  
    @section('content')


<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header card-header-primary">
                  <h4 class="card-title mt-0">OrganRequest list</h4>
                 
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                    <thead>
									<tr>
                                    <th>ID</th>
                                               
                                               <th>organ Name</th>
                                               <th>Status</th>
                                               <th>Name</th>
                                               <th>Email</th>
                                               <th>Contact No</th>
                                               <th>Message</th>
                                               <th>Delete</th>
									</tr>
								</thead>
                                <tbody>
                                @foreach($organ as $organs)
                                            <tr class="odd gradeX">
                                              
                                                <td>{{$organs->id}} </td>
                                                <td>{{$organs->organ_name}} </td>
                                                <td>{{$organs->status}} </td>
                                                <td>{{$organs->name}} </td>
                                                <td>{{$organs->email}} </td>
                                                <td>{{$organs->contact_no}} </td>
                                                <td>{{$organs->description}} </td>
                                                <td><a href="{{route('organdelete',['id'=>$organs->id])}}" onclick="return confirm('Do You Really Want To Delete This Organ Request?')">
                                                <button class="btn btn-danger"><i class="fa fa-trash"></i></button></a></td>
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
      @endsection