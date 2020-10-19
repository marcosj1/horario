 @extends('app')


 @section('content')
 @include('Validacion')


 @if(session()->has('Errormsj'))

<div class="toast tt-ptr tt-br">
<p class="mensaje">{{ session('Errormsj') }}</p></div>
 @endif
 <!-- ============================================================== -->
 <!-- pageheader -->
 <!-- ============================================================== -->

 <div class="row">
 	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
 		<div class="page-header">
 			<h2 class="pageheader-title"><figure><img  style="width: 10%; float: left;" src="{{ asset('assets/images/usuario.png') }}"></figure>Usuario</h2>

 			<div class="page-breadcrumb">
 				<nav aria-label="breadcrumb">
 					<ol class="breadcrumb">

 						<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Seguridad</a></li>
 						<li class="breadcrumb-item active" aria-current="page">Usuario</li>
 					</ol>
 				</nav>
 			</div>
 		</div>
 	</div>
 </div>
 <!-- ============================================================== -->
 <!-- end pageheader -->
 <!-- ============================================================== -->
 <div class="row">
 	<!-- ============================================================== -->
 	<!-- basic table  -->
 	<!-- ============================================================== -->

 	<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
 		<div class="card">
 			<h5 class="card-header">Datos del Usuario </h5>

 			<div class="card-body">
 				<form id="validationform" data-parsley-validate="" novalidate="" action="/usuario" method="POST">
 					@csrf

 					<div class="form-group col-xl-6" style="float: left;">
 						<label for="name" class="col-form-label">Nombre</label>
 						<input required="" value="{{ old('name') }}" id="name" name="name" type="text" class="form-control">
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
 						<label for="id_pnf" class="col-form-label">PNF que pertenece</label>
 						<select id="id_pnf" name="id_pnf" class="form-control">
 							<option value="">Seleccione...</option>
 							@foreach($pnf as $pnfs)
 							<option value="{{$pnfs->id}}">{{$pnfs->nombre}}</option>
 							@endforeach
 						</select>



 					</div>

 				</div>
 			</div>
 		</div>





 		<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
 			<div class="card">


 				<div class="card-body">


 				<div class="form-group col-xl-12" style="float: left;">
 						<label for="email" class="col-form-label">Email</label>
 						<input required="" value="{{ old('email') }}" id="email" name="email" type="email" class="form-control">
 					</div>
 					<div class="form-group col-xl-12" style="float: left;">
 						<label for="password" class="col-form-label">Contraseña</label>
 						<input required="" value="{{ old('password') }}" id="password" name="password" type="password" class="form-control">
 					</div>

 					<div class="form-group col-xl-12" style="float: left;">
 						<label for="con_password" class="col-form-label">Confirmar Contraseña</label>
 						<input required="" value="{{ old('con_password') }}" id="con_password" name="con_password" type="password" class="form-control">
            <br>
            <h3> Lista de roles</h3>
            <div class="form-group">
              <ul class="list-unstyled">

                	@foreach($rol as $roles)

                  <label>

                    {{ Form::checkbox('roles[]', $roles->id, null)}}

                    {{ $roles->name}}

                    <em>

                  </label>

                  @endforeach


              </ul>
            </div>
 					</div>

 					<div class="form-group col-xl-12" style="float: left;">
 						<a href="./" class="btn btn-rounded btn-default">Cancelar</a>
 						<button class="btn btn-rounded btn-primary">Registar</button>


 					</div>
 				</form>

 			</div>
 		</div>
 	</div>
















 	<!-- ============================================================== -->
 	<!-- end basic table  -->
 	<!-- ============================================================== -->
 </div>
</div>
</div>

@endsection
