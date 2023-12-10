<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Fams</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('ui/backend') }}/assets/img/favicon.png" rel="icon">
  <link href="{{ asset('ui/backend') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor {{ asset('ui/backend') }}/CSS Files -->
  <link href="{{ asset('ui/backend') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('ui/backend') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('ui/backend') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ asset('ui/backend') }}/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="{{ asset('ui/backend') }}/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="{{ asset('ui/backend') }}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{ asset('ui/backend') }}/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('ui/backend') }}/assets/css/style.css" rel="stylesheet">
<!-- toastr -->
<link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Nov 17 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  @include('backend.layouts.fixed.header')

  <!-- ======= Sidebar ======= -->
  @include('backend.layouts.fixed.sidebar')

      

  

  <main id="main" class="main">
      @yield('content')

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 @include('backend.layouts.fixed.footer')

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('ui/backend') }}/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="{{ asset('ui/backend') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('ui/backend') }}/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="{{ asset('ui/backend') }}/assets/vendor/echarts/echarts.min.js"></script>
  <script src="{{ asset('ui/backend') }}/assets/vendor/quill/quill.min.js"></script>
  <script src="{{ asset('ui/backend') }}/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="{{ asset('ui/backend') }}/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="{{ asset('ui/backend') }}/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('ui/backend') }}/assets/js/main.js"></script>
  <!-- toastr -->
  <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        {!! Toastr::message() !!}
</body>

</html>

/
