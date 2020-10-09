<!DOCTYPE html>
<html>
<head>
  <title></title>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('assets/toastr.css') }}">-->
    <link href="{{ asset('assets/vendor/fonts/circular-std/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/libs/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/datatables/css/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/datatables/css/buttons.bootstrap4.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/datatables/css/select.bootstrap4.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/datatables/css/fixedHeader.bootstrap4.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
</head>
<body>




































































  <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
    <div class="card">
      <h5 class="card-header">Datos del Usuario </h5>

      <div class="card-body">
        <form id="validationform" data-parsley-validate="" novalidate="" action="/usuario" method="POST">
          @csrf

          <div class="form-group col-xl-6" style="float: left;">
            <label for="nombre" class="col-form-label">Nombre</label>
            <input required="" value="{{ old('nombre') }}" id="nombre" name="nombre" type="text" class="form-control">
          </div>
          <div class="form-group col-xl-6" style="float: left;">
            <label for="apellido" class="col-form-label">Apellido</label>
            <input required="" value="{{ old('apellido') }}" id="apellido" name="apellido" type="text" class="form-control">
          </div>
          <div class="form-group col-xl-6" style="float: left;">
            <label for="cedula" class="col-form-label">Cédula</label>
            <input required="" value="{{ old('cedula') }}" id="cedula" name="cedula" type="number" class="form-control">
          </div>
          <div class="form-group col-xl-6" style="float: left;">
            <label for="email" class="col-form-label">Email</label>
            <input required="" value="{{ old('email') }}" id="email" name="email" type="email" class="form-control">
          </div>
  




        </div>
      </div>
    </div>
























 <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <!--<script src="{{ asset('assets/toastr.js') }}"></script>-->
    <script src="{{ asset('assets/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('assets/vendor/slimscroll/jquery.slimscroll.js') }}"></script>

    <script src="{{ asset('assets/libs/js/main-js.js') }}"></script>
    <script src="{{ asset('js/datatable.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
    <!--<script src="{{ asset('assets/vendor/datatables/js/buttons.bootstrap4.min.js') }}"></script>-->
    <script src="{{ asset('assets/vendor/datatables/js/data-table.js') }}"></script>
</body>
</html>