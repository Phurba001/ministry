<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ministry Project</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
   <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}" />
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}" />
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Main content -->
  <div class="content">
    <div class="container min-vh-100 d-flex flex-column justify-content-center">
      <h3 class="text-center">सुदुरपश्चिम प्रदेश सरकार</h3>
      <div class="card card-primary card-outline w-50 mx-auto mt-3">
        <div class="card-header text-center">
          <h6 class="m-0">आफ्नो सत्र सुरु गर्न साइन इन गर्नुहोस्</h6>
        </div>
        <div class="card-body">
          <div class="form-group">
            <input type="text" id="inputName" class="form-control" value="इमेल वा कोड">
          </div>
          <div class="form-group">
            <input type="text" id="inputName" class="form-control" value="पासवर्ड">
          </div>
          <div class="form-group d-flex justify-content-between">
            <div class="icheck-primary">
              <input type="checkbox" value="" id="check1">
              <label for="check1">मलाई सम्झनुहोस्</label>
            </div>
            <a href="{{route('home.home')}}" class="btn btn-primary">
              साइन इन गर्नुहोस्
            </a>
          </div>
          <div class="card-footer text-center">
            <a href="#" class="m-0">मैले मेरो पासवर्ड बिर्सें</a>
          </div>

        </div>
      </div>
    </div>
    <!-- /.content-wrapper -->
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
     <script src="{{ asset('plugins/jquery/jquery.min.js') }}" ></script>
  <!-- Bootstrap 4 -->
        <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}" ></script>
 
  <!-- AdminLTE App -->
    <script src="{{ asset('js/adminlte.min.js') }}" ></script>
</body>
</html>
