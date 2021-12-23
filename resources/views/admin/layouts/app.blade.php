<!DOCTYPE html>

<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        
       <title>ADMIN | Organ Transplant</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.css">

        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/theme/assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/theme/assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/theme/assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/theme/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{asset('admin/theme/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/theme/assets/global/plugins/morris/morris.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/theme/assets/global/plugins/fullcalendar/fullcalendar.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/theme/assets/global/plugins/jqvmap/jqvmap/jqvmap.css')}}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{{asset('admin/theme/assets/global/css/components.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{asset('admin/theme/assets/global/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="{{asset('admin/theme/assets/layouts/layout2/css/layout.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/theme/assets/layouts/layout2/css/themes/blue.min.css')}}" rel="stylesheet" type="text/css" id="style_color" />
        <link href="{{asset('admin/theme/assets/layouts/layout2/css/custom.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->

        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/theme/assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/theme/assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/theme/assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/theme/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{asset('admin/theme/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css')}}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{{asset('admin/theme/assets/global/css/components.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
        <link href="{{asset('admin/theme/assets/global/css/plugins.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="{{asset('admin/theme/assets/pages/css/profile.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="{{asset('admin/theme/assets/layouts/layout2/css/layout.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/theme/assets/layouts/layout2/css/themes/blue.min.css')}}" rel="stylesheet" type="text/css" id="style_color" />
        <link href="{{asset('admin/theme/assets/layouts/layout2/css/custom.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="favicon.ico" /> </head>
    <!-- END HEAD -->


        <!--DATA TABLE-->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{asset('admin/theme/assets/global/plugins/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/theme/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.css')}}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->

        <link rel="shortcut icon" href="favicon.ico" /> 

        <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
        <script src="http://www.codermen.com/js/jquery.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.0/css/buttons.dataTables.min.css"></script>

        


        <script>
            $(function () {
                CKEDITOR.replace('editor1')
                //bootstrap WYSIHTML5 - text editor
                $('.textarea').wysihtml5()
            })
        </script>
        <script src="{{asset('admin/theme/assets/global/plugins/ckeditor/ckeditor.js')}}"></script>

    </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid">
        @include('admin.layouts.partials.header')
        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->
        <div class="page-container">
            @include('admin.layouts.partials.sidebar')
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                @yield('content')
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->
        @include('admin.layouts.partials.footer')
      
        <!-- BEGIN CORE PLUGINS -->
        <script src="{{asset('admin/theme/assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/theme/assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/theme/assets/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/theme/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/theme/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/theme/assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/theme/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="{{asset('admin/theme/assets/global/plugins/moment.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/theme/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/theme/assets/global/plugins/morris/morris.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/theme/assets/global/plugins/morris/raphael-min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/theme/assets/global/plugins/counterup/jquery.waypoints.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/theme/assets/global/plugins/counterup/jquery.counterup.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/theme/assets/global/plugins/amcharts/amcharts/amcharts.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/theme/assets/global/plugins/amcharts/amcharts/serial.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/theme/assets/global/plugins/amcharts/amcharts/pie.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/theme/assets/global/plugins/amcharts/amcharts/radar.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/theme/assets/global/plugins/amcharts/amcharts/themes/light.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/theme/assets/global/plugins/amcharts/amcharts/themes/patterns.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/theme/assets/global/plugins/amcharts/amcharts/themes/chalk.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/theme/assets/global/plugins/amcharts/ammap/ammap.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/theme/assets/global/plugins/amcharts/ammap/maps/js/worldLow.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/theme/assets/global/plugins/amcharts/amstockcharts/amstock.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/theme/assets/global/plugins/fullcalendar/fullcalendar.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/theme/assets/global/plugins/horizontal-timeline/horozontal-timeline.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/theme/assets/global/plugins/flot/jquery.flot.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/theme/assets/global/plugins/flot/jquery.flot.resize.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/theme/assets/global/plugins/flot/jquery.flot.categories.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/theme/assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/theme/assets/global/plugins/jquery.sparkline.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/theme/assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/theme/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/theme/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/theme/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/theme/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/theme/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/theme/assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js')}}" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="{{asset('admin/theme/assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="{{asset('admin/theme/assets/pages/scripts/dashboard.min.js')}}" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="{{asset('admin/theme/assets/layouts/layout2/scripts/layout.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/theme/assets/layouts/layout2/scripts/demo.min.js')}}" type="text/javascript"></script>
        
        <!-- END THEME LAYOUT SCRIPTS -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
        
        <!--DATA TABLE-->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="{{asset('admin/theme/assets/global/scripts/datatable.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/theme/assets/global/plugins/datatables/datatables.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/theme/assets/global/plugins/datatables/plugins/bootstrap/datatables.bootstrap.js')}}" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="{{asset('admin/theme/assets/pages/scripts/table-datatables-managed.min.js')}}" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script> 
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js"></script>

             <!-- BEGIN CORE PLUGINS -->
        <script src="{{asset('admin/theme/assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/theme/assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/theme/assets/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/theme/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/theme/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/theme/assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/theme/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="{{asset('admin/theme/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/theme/assets/global/plugins/jquery.sparkline.min.js')}}" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="{{asset('admin/theme/assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="{{asset('admin/theme/assets/pages/scripts/profile.min.js')}}" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <script src="{{asset('admin/theme/assets/layouts/layout2/scripts/layout.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/theme/assets/layouts/layout2/scripts/demo.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin/theme/assets/layouts/global/scripts/quick-sidebar.min.js')}}" type="text/javascript"></script>
       

        <script>
            @if(Session::has('notification'))
                var type = "{{ Session::get('notification.alert-type', 'info') }}";
                switch(type){
                    case 'info':
                        toastr.info("{{ Session::get('notification.message') }}");
                        break;
                    
                    case 'warning':
                        toastr.warning("{{ Session::get('notification.message') }}");
                        break;
                    case 'success':
                        toastr.success("{{ Session::get('notification.message') }}");
                        break;
                    case 'error':
                        toastr.error("{{ Session::get('notification.message') }}");
                        break;
                }
            @endif
        </script>
        <script type="text/javascript">
    $('#country').change(function(){
    var countryID = $(this).val();    
    if(countryID){
        $.ajax({
           type:"GET",
           url:"{{url('get-state-list')}}?country_id="+countryID,
           success:function(res){               
            if(res){
                $("#state").empty();
                $("#state").append('<option>Select</option>');
                $.each(res,function(key,value){
                    $("#state").append('<option value="'+key+'">'+value+'</option>');
                });
           
            }else{
               $("#state").empty();
            }
           }
        });
    }else{
        $("#state").empty();
        $("#city").empty();
    }      
   });
    $('#state').on('change',function(){
    var stateID = $(this).val();    
    if(stateID){
        $.ajax({
           type:"GET",
           url:"{{url('get-city-list')}}?state_id="+stateID,
           success:function(res){               
            if(res){
                $("#city").empty();
                $.each(res,function(key,value){
                    $("#city").append('<option value="'+key+'">'+value+'</option>');
                });
           
            }else{
               $("#city").empty();
            }
           }
        });
    }else{
        $("#city").empty();
    }
        
   });
</script>
<script>
$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
</script>
</body>

</html>