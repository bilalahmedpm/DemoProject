<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
            <meta content="IE=edge" http-equiv="X-UA-Compatible">
                <meta content="width=device-width, initial-scale=1" name="viewport">
                    <meta content="" name="description">
                        <meta content="" name="author">
                            <link href="{{asset('backend/images/favicon.ico')}}" rel="icon">
                                <title>
                                    Sunny Admin - Dashboard
                                </title>
                                <!-- Vendors Style-->
                                <link href="{{asset ('backend/css/vendors_css.css') }}" rel="stylesheet">
                                    <!-- Style-->
                                    <link href="{{asset ('backend/css/style.css') }}" rel="stylesheet">
                                        <link href="{{asset ('backend/css/skin_color.css') }}" rel="stylesheet">
                                <link href="{{asset('assets/vendor_plugins/toaster/toastr.min.css') }}" rel="stylesheet">
                                   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >
                                        </link>
                                    </link>
                                </link>
                            </link>
                        </meta>
                    </meta>
                </meta>
            </meta>
        </meta>
    </head>
    <body class="hold-transition dark-skin sidebar-mini theme-primary fixed">
        <div class="wrapper">
            <!-- Main Header -->
            @include('admin.body.header')
            <!-- Left side column. contains the logo and sidebar -->
            @include('admin.body.sidebar')
            <!-- Content Wrapper. Contains page content -->
            @yield('admin')
            <!-- /.content-wrapper -->
            <!-- main Footer -->
            @include('admin.body.footer')
            <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
            <div class="control-sidebar-bg">
            </div>
        </div>
        <!-- ./wrapper -->
        <!-- Vendor JS -->
        <script src="{{asset('backend/js/vendors.min.js')}}">
        </script>
        <script src="{{asset('../assets/icons/feather-icons/feather.min.js')}}">
        </script>
     {{-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> --}}
     <script src="{{asset('../assets/vendor_components/easypiechart/dist/jquery.easypiechart.js')}}">
        </script>
        <script src="{{asset('../assets/vendor_components/apexcharts-bundle/irregular-data-series.js')}}">
        </script>
        <script src="{{asset('../assets/vendor_components/apexcharts-bundle/dist/apexcharts.js')}}">
        </script> 
  
     
    <script src="{{asset('../assets/vendor_components/bootstrap-select/dist/js/bootstrap-select.js')}}"></script>
	<script src="{{asset('../assets/vendor_components/bootstrap-tagsinput/dist/bootstrap-tagsinput.js')}}"></script>
	<script src="{{asset('../assets/vendor_components/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js')}}"></script>
	<script src="{{asset('../assets/vendor_components/select2/dist/js/select2.full.js')}}"></script>
    <script src="{{asset('../assets/vendor_plugins/input-mask/jquery.inputmask.js')}}"></script>
	<script src="{{asset('../assets/vendor_plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
	<script src="{{asset('../assets/vendor_plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>
	<script src="{{asset('../assets/vendor_components/moment/min/moment.min.js')}}"></script>
	<script src="{{asset('../assets/vendor_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
	<script src="{{asset('../assets/vendor_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
	<script src="{{asset('../assets/vendor_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
	<script src="{{asset('../assets/vendor_plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
	<script src="{{asset('../assets/vendor_plugins/iCheck/icheck.min.js')}}"></script>
	<script src="{{asset('backend/js/pages/advanced-form-element.js')}}"></script>
        <!-- Sunny Admin App -->
 <script src="{{asset('../assets/vendor_components/datatable/datatables.min.js')}}"></script>

    <script src="{{asset('backend/js/pages/data-table.js')}}"></script>
        <script src="{{asset('backend/js/pages/dashboard.js')}}"></script>
        <script src="{{asset('backend/js/template.js')}}"></script>
        <script src="{{asset('assets/vendor_plugins/toaster/toastr.min.js')}}">
        </script>   
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <script Type = "text/javascript">
   
            $(function(){
            $(document).on('click' , '#delete',function(e){
            e.preventDefault();
            var link = $(this).attr("href");
            Swal.fire({
            title: 'Are you sure?',
            text: "You Want to Delete the Record",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.isConfirmed) {
            window.location.href = link
            Swal.fire(
            'Deleted!',
            'Your Data has been deleted.',
            'success'
            )
            }
            })

         });
       });


   </script>     
        
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
@stack('footer-scripts')
<script>
 @if(Session::has('message'))
 var type = "{{ Session::get('alert-type','info') }}"
 switch(type){
    case 'info':
    toastr.info(" {{ Session::get('message') }} ");
    break;

    case 'success':
    toastr.success(" {{ Session::get('message') }} ");
    break;

    case 'warning':
    toastr.warning(" {{ Session::get('message') }} ");
    break;

    case 'error':
    toastr.error(" {{ Session::get('message') }} ");
    break; 
 }
 @endif 
</script>


    </body>
</html>
