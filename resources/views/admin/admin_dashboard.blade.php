<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords" content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>Admin Dashboard - System</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="{{ asset('backend/assets/css/custom/google-fonts.css') }}" rel="stylesheet">
  <!-- End fonts -->

    <!-- core:css -->
    <link rel="stylesheet" href="{{asset('backend/assets/vendors/core/core.css')}}">
    <!-- endinject -->
    	<!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{asset('backend/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css')}}">
	<!-- End plugin css for this page -->

    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{asset('backend/assets/vendors/flatpickr/flatpickr.min.css')}}">
    <!-- End plugin css for this page -->

    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('backend/assets/fonts/feather-font/css/iconfont.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}">
    <!-- endinject -->

  <!-- Layout styles -->  
    <link rel="stylesheet" href="{{asset('backend/assets/css/demo2/style.css')}}">
  <!-- End layout styles -->

  <link rel="shortcut icon" href="{{asset('backend/assets/images/favicon.png')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/custom/toaster.css')}}" >
</head>
<body>
    <div class="main-wrapper">

        <!-- partial:partials/_sidebar.html -->
        @include('admin.body.sidebar')

        <!-- partial -->
    
        <div class="page-wrapper">
                    
            <!-- partial:partials/_navbar.html -->
            @include('admin.body.header')

            <!-- partial -->

        @yield('admin')

            <!-- partial:partials/_footer.html -->
            @include('admin.body.footer')
            <!-- partial -->
        
        </div>
    </div>

    <!-- core:js -->
    <script src="{{asset('backend/assets/vendors/core/core.js')}}"></script>
    <!-- endinject -->

    <!-- Plugin js for this page -->
  <script src="{{asset('backend/assets/vendors/flatpickr/flatpickr.min.js')}}"></script>
  <script src="{{asset('backend/assets/vendors/apexcharts/apexcharts.min.js')}}"></script>
    <!-- End plugin js for this page -->

    <!-- inject:js -->
    <script src="{{asset('backend/assets/vendors/feather-icons/feather.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/template.js')}}"></script>
    <!-- endinject -->

    <!-- Custom js for this page -->
  <script src="{{asset('backend/assets/js/dashboard-dark.js')}}"></script>
    <!-- End custom js for this page -->

        <!-- Custom js for Toaster -->
  <script type="text/javascript" src="{{asset('backend/assets/js/toaster.min.js')}}"></script>
    <!-- End custom js for Toaster -->
    <script>
    @if(Session::has('message'))
        var type = "{{ Session::get('alert-type', 'info') }}";
        switch(type) {
            case 'info':
                toastr.info("{{ Session::get('message') }}");
                break;

            case 'success':
                toastr.success("{{ Session::get('message') }}");
                break;

            case 'warning':
                toastr.warning("{{ Session::get('message') }}");
                break;

            case 'error':
                toastr.error("{{ Session::get('message') }}");
                break;
        }
    @endif
</script>

	<!-- START DATATABLES -->
  <script src="{{asset('backend/assets/vendors/datatables.net/jquery.dataTables.js')}}"></script>
  <script src="{{asset('backend/ssets/vendors/datatables.net-bs5/dataTables.bootstrap5.js')}}"></script>

    <script src="{{asset('backend/assets/js/data-table.js')}}"></script>
	<!-- END DATATABLES -->


</body>
</html>    