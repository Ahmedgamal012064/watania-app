<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="">
    <meta name="keywords" content="admin">
    <meta name="author" content="asclepiuss">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="apple-touch-icon" href="{{asset('Adminlook/images/logo/logo.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('Adminlook/images/logo/logo.png')}}">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Quicksand:300,400,500,700"
        rel="stylesheet">
    <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css"
          rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{asset('Adminlook/css-rtl/plugins/animate/animate.css')}}">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('Adminlook/css-rtl/vendors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Adminlook/vendors/css/forms/icheck/icheck.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Adminlook/vendors/css/forms/icheck/custom.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Adminlook/vendors/css/weather-icons/climacons.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Adminlook/fonts/meteocons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Adminlook/vendors/css/charts/morris.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Adminlook/vendors/css/charts/chartist.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Adminlook/vendors/css/forms/selects/select2.min.css')}}">
    <link rel="stylesheet" type="text/css"
          href="{{asset('Adminlook/vendors/css/charts/chartist-plugin-tooltip.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Adminlook/vendors/css/forms/toggle/bootstrap-switch.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Adminlook/vendors/css/forms/toggle/switchery.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Adminlook/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Adminlook/css-rtl/pages/chat-application.css')}}">
    <!-- END VENDOR CSS-->
    <!-- BEGIN MODERN CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('Adminlook/css-rtl/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Adminlook/css-rtl/custom-rtl.css')}}">
    <!-- END MODERN CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('Adminlook/css-rtl/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Adminlook/css-rtl/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Adminlook/fonts/simple-line-icons/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Adminlook/css-rtl/core/colors/palette-gradient.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Adminlook/css-rtl/pages/timeline.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Adminlook/vendors/css/cryptocoins/cryptocoins.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Adminlook/vendors/css/extensions/datedropper.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Adminlook/vendors/css/extensions/timedropper.min.css')}}">
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('Adminlook/css-rtl/style-rtl.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Adminlook/css/plugins/forms/checkboxes-radios.css')}}">
    <!-- END Custom CSS-->
    @yield('style')
    <link href="https://fonts.googleapis.com/css?family=Cairo&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</head>
<style>
    .btn-show-pass {
font-size: 20px;
color: #999999;
display: -webkit-box;
display: -webkit-flex;
display: -moz-box;
display: -ms-flexbox;
display: flex;
align-items: center;
position: absolute;
height: 100%;
top: 18px;
right: 30px;
padding: 0 5px;
cursor: pointer;
-webkit-transition: background 0.4s;
-o-transition: background 0.4s;
-moz-transition: background 0.4s;
transition: background 0.4s;
}
</style>
<body class="vertical-layout vertical-menu 2-columns  menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">
<!-- fixed-top-->
@include('admin.includes.header')
<!-- ////////////////////////////////////////////////////////////////////////////-->
@include('admin.includes.sidebar')

@yield('content')
<!-- ////////////////////////////////////////////////////////////////////////////-->
@include('admin.includes.footer')


<!-- BEGIN VENDOR JS-->
<script src="{{asset('Adminlook/vendors/js/vendors.min.js')}}" type="text/javascript"></script>
<!-- BEGIN VENDOR JS-->
<script src="{{asset('Adminlook/vendors/js/tables/datatable/datatables.min.js')}}" type="text/javascript"></script>
<script src="{{asset('Adminlook/vendors/js/tables/datatable/dataTables.buttons.min.js')}}" type="text/javascript"></script>

<script src="{{asset('Adminlook/vendors/js/forms/toggle/bootstrap-switch.min.js')}}"   type="text/javascript"></script>
<script src="{{asset('Adminlook/vendors/js/forms/toggle/bootstrap-checkbox.min.js')}}"  type="text/javascript"></script>
<script src="{{asset('Adminlook/vendors/js/forms/toggle/switchery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('Adminlook/js/scripts/forms/switch.js')}}" type="text/javascript"></script>
<script src="{{asset('Adminlook/vendors/js/forms/select/select2.full.min.js')}}" type="text/javascript"></script>
<script src="{{asset('Adminlook/js/scripts/forms/select/form-select2.js')}}" type="text/javascript"></script>
<script src="{{asset('Adminlook/vendors/js/forms/icheck/icheck.min.js')}}" type="text/javascript"></script>
<!-- BEGIN PAGE VENDOR JS-->
<script src="{{asset('Adminlook/vendors/js/charts/chart.min.js')}}" type="text/javascript"></script>
<script src="{{asset('Adminlook/vendors/js/charts/echarts/echarts.js')}}" type="text/javascript"></script>

<script src="{{asset('Adminlook/vendors/js/extensions/datedropper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('Adminlook/vendors/js/extensions/timedropper.min.js')}}" type="text/javascript"></script>

<script src="{{asset('Adminlook/vendors/js/forms/icheck/icheck.min.js')}}" type="text/javascript"></script>
<script src="{{asset('Adminlook/js/scripts/pages/chat-application.js')}}" type="text/javascript"></script>
<!-- END PAGE VENDOR JS-->
<!-- BEGIN MODERN JS-->
<script src="{{asset('Adminlook/js/core/app-menu.js')}}" type="text/javascript"></script>
<script src="{{asset('Adminlook/js/core/app.js')}}" type="text/javascript"></script>
<script src="{{asset('Adminlook/js/scripts/customizer.js')}}" type="text/javascript"></script>
<!-- END MODERN JS-->
<!-- BEGIN PAGE LEVEL JS-->
<script src="{{asset('Adminlook/js/scripts/pages/dashboard-crypto.js')}}" type="text/javascript"></script>


<script src="{{asset('Adminlook/js/scripts/tables/datatables/datatable-basic.js')}}" type="text/javascript"></script>
<script src="{{asset('Adminlook/js/scripts/extensions/date-time-dropper.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL JS-->

<script src="{{asset('Adminlook/js/scripts/forms/checkbox-radio.js')}}" type="text/javascript"></script>

<script src="{{asset('Adminlook/js/scripts/modal/components-modal.js')}}" type="text/javascript"></script>

<script>
    $('body').click(function(){
        $('body').removeClass('menu-open').addClass('menu-hide');
        $('.nav-link.nav-menu-main.menu-toggle.hidden-xs').removeClass('is-active');
        $('#navbar-mobile22').removeClass('show');
    });
</script>
@yield('script')
<script>
    $(document).ready(function(){
        var showPass = 0;
        $('.btn-show-pass').on('click', function(){
            if(showPass == 0) {
                $(this).next('input').attr('type','text');
                $(this).find('i').removeClass('icon-eye');
                $(this).find('i').addClass('icon-eye-slash');
                showPass = 1;
            }else {
                $(this).next('input').attr('type','password');
                $(this).find('i').removeClass('icon-eye-slash');
                $(this).find('i').addClass('icon-eye');
                showPass = 0;
            }

        });
    });
</script>
@if ($errors->any())
@foreach($errors->all() as $error)
<script>
    toastr.options =
{
    "closeButton" : true,
    "progressBar" : true
}
        toastr.error("{{ $error }}");
</script>
@endforeach
@endif

@if (Session::has('success'))
    <script>
        toastr.options =
    {
        "closeButton" : true,
        "progressBar" : true
    }
    toastr.success("{{ Session::get('success') }}");
    </script>
@endif
</body>
</html>
