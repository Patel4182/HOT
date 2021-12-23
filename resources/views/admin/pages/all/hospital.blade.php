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
                                        <span class="caption-subject font-green bold uppercase">Hospitals</span>
                                    </div>
                                    <div class="btn-group pull-right">
                                                   <a href="{{ route('addhospital')}}"> <button class="btn green  btn-outline" >ADD</button></a>
                                                
                                    </div>
                                </div>
                               
                                <div class="portlet-body">
                                    <div class="mt-element-card mt-card-round mt-element-overlay">
                                        <div class="row">
                                        @foreach($hospital as $hospitals)
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">

                                                <div class="mt-card-item">
                                                    <div class="mt-card-avatar mt-overlay-1">
                                                        <a href=""><img src="{{asset('/images/hospital/logo/'.$hospitals->image)}}" /></a>
                                                        <div class="mt-overlay">
                                                            <ul class="mt-info">
                                                                <li>
                                                                    <a class="btn default btn-outline" href="{{route('hprofile',['id'=>$hospitals->id])}}">
                                                                        <i class="icon-link"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="mt-card-content">
                                                        <h3 class="mt-card-name">{{$hospitals->name}} </h3>
                                                        <p class="mt-card-desc font-grey-mint">{{$hospitals->cities->city}} </p>
                                                       
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