<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>@yield('title')</title>
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href={{ asset('erp_sys/assets/admin/plugins/fontawesome-free/css/all.min.css') }}>
  <!-- Theme style -->
  <link rel="stylesheet" href={{ asset('erp_sys/assets/admin/dist/css/adminlte.min.css') }}>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href={{ asset('erp_sys/assets/admin/fonts/SansPro/SansPro.min.css') }}>
  <link rel="stylesheet" href={{ asset('erp_sys/assets/admin/css/bootstrap_rtl-v4.2.1/bootstrap.min.css') }}>
  <link rel="stylesheet" href={{ asset('erp_sys/assets/admin/css/bootstrap_rtl-v4.2.1/custom_rtl.css') }}>
  <link rel="stylesheet" href={{ asset('erp_sys/assets/admin/css/mycustomstyle.css') }}>

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  @include('admin.includes.navbar')

  @include('admin.includes.sidebar')

  @include('admin.includes.content')

  @include('admin.includes.footer')

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src={{ asset('erp_sys/assets/admin/plugins/jquery/jquery.min.js') }}></script>
<!-- Bootstrap 4 -->
<script src={{ asset('erp_sys/assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}></script>
<!-- AdminLTE App -->
<script src={{ asset('erp_sys/assets/admin/dist/js/adminlte.min.js') }}></script>
@yield('scripts')
</body>
</html>
