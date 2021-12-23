    @extends('doctor.layouts.app')  
    @section('content')
            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('addorgan')}}">Add Organ</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Organs</h4>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                        <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                                        <span></span>
                                                    </label>
                                                </th>
                                                <th>Id</th>
                                                <th>Hospital</th>
                                                <th>Doctor</th>
                                                <th>Organ Name</th>
                                                <th>Description</th>
                                                <th>Organ Image</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($organ as $organ)
                                                <tr class="odd gradeX">
                                                    <td>
                                                        <label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                            <input type="checkbox" class="checkboxes" value="1" />
                                                            <span></span>
                                                        </label>
                                                    </td>
                                                    <td>{{$organ->id}} </td>
                                                    <td>{{$organ->hospital->name}} </td>
                                                    <td>{{$organ->doctor->name}}</td>
                                                    <td>{{$organ->organ_name}} </td>
                                                    <td>{{$organ->description}} </td>
                                                    <td><img src="{{asset('/images/organ/'.$organ->organ_image)}}" height="100" width="100"></td>
                                                    <td>{{$organ->status}} </td>
                                                    <td>
                                                        <a href="{{route('deleteorgan',['id'=>$organ->id])}}" onclick="return confirm('Do You Really Want To Delete This Hospital?')">
                                                            <button type="button" title="Delete" class="btn btn-outline red btn-circle btn-sm">
                                                                <i class="fa fa-trash-o"></i>
                                                            </button>
                                                        </a>
                                                        <a href="{{route('editorgan',['id'=>$organ->id])}}">
                                                            <button type="button" title="Edit" class="btn btn-outline green btn-circle btn-sm">
                                                                <i class="fa fa-pencil"></i>
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
                    </div>
                </div>
            </div>
    @endsection