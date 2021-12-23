@extends('admin.layouts.app')  
    @section('content')
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                   
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN SAMPLE FORM PORTLET-->
                            <div class="portlet light ">
                                <div class="portlet-title">
                                    <div class="caption font-red-sunglo">
                                        <i class="icon-settings font-red-sunglo"></i>
                                        <span class="caption-subject bold uppercase"> Contact-Reply</span>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                @if($errors->any())
                                    @include('errors.error')
                                @endif
                                @foreach($appointment as $app)
                                    <form role="form" method="post" action="{{route('appreply',['id'=>$app->id])}}">
                                    {{csrf_field()}}
                                        <div class="form-body">
                                            <div class="form-group">
                                                <label> Email</label>
                                                <div class="input-group">
                                                    <input type="name" class="form-control" name=email placeholder="Email" value="{{$app->email}}">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-envelope font-red"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label> Subject</label>
                                                <input type="text" class="form-control" name="subject" placeholder="Subject">
                                            </div>
                                            <div class="form-group">
                                                <label> Message</label>
                                                
                                                <textarea id="editor1" name="editor1" rows="3" class="form-control" placeholder="Message"></textarea>
                                            </div>
                                            <div class="form-actions">
                                                <button type="submit" class="btn btn-success">Send Mail</button>
                                                <button type="button" class="btn default">Cancel</button>
                                            </div>
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

    <!-- EDITER -->
    