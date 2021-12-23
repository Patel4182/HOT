@extends('admin.layouts.app')  
@section('content')


                <div class="page-content">

                    <!-- BEGIN : USER CARDS -->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="portlet light portlet-fit ">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class=" icon-layers font-green"></i>
                                        <span class="caption-subject font-green bold uppercase">Doctors</span>
                                    </div>
                                    <div class="btn-group pull-right">
                                                   <a href="{{ route('adddoctor')}}"> <button class="btn green  btn-outline" >ADD</button></a>
                                                
                                    </div>
                                </div>   
                                <div class="portlet-body">
                                    <div class="mt-element-card mt-card-round mt-element-overlay">
                                        <div class="row">
                                        @foreach($doctor as $doctors)
                                            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                                <div class="mt-card-item">
                                                    <div class="mt-card-avatar mt-overlay-1">
                                                        <a href=""><img src="{{asset('/images/doctor/logo/'.$doctors->image)}}" height="100" width="100"></a>
                                                        <div class="mt-overlay">
                                                            <ul class="mt-info">
                                                                <li>
                                                                <a class="btn default btn-outline" href="{{route('dprofile',['id'=>$doctors->id])}}">
                                                                    <i class="icon-link"></i>
                                                                </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="mt-card-content">
                                                        <h3 class="mt-card-name">{{$doctors->name}} </h3>
                                                        <p class="mt-card-desc font-grey-mint">{{$doctors->cities->city}} </p>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <!-- END : USER CARDS -->
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
            <!-- BEGIN QUICK SIDEBAR -->
            <a href="javascript:;" class="page-quick-sidebar-toggler">
                <i class="icon-login"></i>
            </a>   
        </div>   
@endsection