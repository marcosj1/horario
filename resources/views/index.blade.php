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

<body style="background-image:url({{url('assets/images/compu.jpg')}});
background-size:cover;
min-height:100%;">







  <div class="dashboard-main-wrapper">
    <!-- ============================================================== -->
    <!-- navbar -->
    <!-- ============================================================== -->
    <div class="dashboard-header" >
      <nav  class="navbar navbar-expand-lg bg-white fixed-top" >
        <a class="navbar-brand" href="">SIGOHA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto navbar-right-top">
            <li class="nav-item">
              <div id="custom-search" class="top-search-bar">
                <!--<input class="form-control" type="text" placeholder="Search..">-->
              </div>
            </li>
            <li class="nav-item dropdown notification">
              <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-user"></i> <span class="indicator"></span></a>
              <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                <li>
                  <div class="notification-title"> <img  style="width: 20%; " src="{{ asset('assets/images/usuario.png') }}">Iniciar Sesión </div>
                  <div class="notification-list">
                    <div class="list-group">
                     <center> </center>

                   </div>
                 </div>
               </li>
               <li>
                <div class="list-footer"> <button class="btn btn-rounded btn-primary" style="width: 100%;" href="#">Iniciar</button></div>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown connection">
            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-fw fa-th"></i> </a>
            <ul class="dropdown-menu dropdown-menu-right connection-dropdown">
              <li class="connection-list">
                <div class="row">
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <!--<a href="#" class="connection-item"><img src="assets/images/github.png" alt="" > <span>Github</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/dribbble.png" alt="" > <span>Dribbble</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/dropbox.png" alt="" > <span>Dropbox</span></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/bitbucket.png" alt=""> <span>Bitbucket</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/mail_chimp.png" alt="" ><span>Mail chimp</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/slack.png" alt="" > <span>Slack</span></a>
                                          </div>-->
                                        </div>
                                      </li>
                                      <li>
                                        <div class="conntection-footer"><a href="#">More</a></div>
                                      </li>
                                    </ul>
                                  </li>
                                  <li class="nav-item dropdown nav-user">
                                   <!-- <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>-->
                                   <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                    <div class="nav-user-info">
                                      <h5 class="mb-0 text-white nav-user-name">John Abraham </h5>
                                      <span class="status"></span><span class="ml-2">Available</span>
                                    </div>
                                    <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-power-off mr-2"></i>Logout</a>
                                  </div>
                                </li>
                              </ul>
                            </div>
                          </nav>
                        </div>

                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12" style="margin-top: 5%; position: relative;">
                          <div class="card">
                            <div class="card-header">
                              Inicio de Sesión
                            </div>
                            <div class="card-body">
                              <p class="card-text"></p>



                              @if(session()->has('message-error'))
                              <div class="alert alert-danger alert-dismissible fade show" role="alert" style="float: right;">
                                <strong>{{ session('message-error') }}</strong>
                                <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </a>
                              </div>
                              @endif

                              <form id="validationform" data-parsley-validate="" novalidate="" action="{{ route('login') }}" method="POST">
                                @csrf

                                <div class="form-group col-xl-12">
                                  <label for="email" class="col-form-label">Correo</label>
                                  <input required="" value="{{ old('email') }}" id="email" name="email" type="text" class="form-control" style="padding: 10px;">
                                  @error('email')
                                  <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                  </span>
                                  @enderror
                                </div>
                                <div class="form-group col-xl-12">
                                  <label for="password" class="col-form-label">Contraseña</label>
                                  <input required="" value="{{ old('password') }}" id="password" name="password" type="password" class="form-control" style="padding: 10px;">
                                  @error('password')
                                  <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                  </span>
                                  @enderror
                                </div>
                                <br>
                                <button class="btn btn-primary" style="width: 95%;">Iniciar</button>
                              </div>
                            </form>
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
