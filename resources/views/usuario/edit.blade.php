 @extends('app')


 @section('content')
 @include('Validacion')

 <!-- ============================================================== -->
 <!-- pageheader -->
 <!-- ============================================================== -->
 @if(session()->has('Errormsj'))
 <div class="alert alert-danger" role="alert" style="float: right;">{{ session('Errormsj') }}</div>
 @endif
  
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
 						<label for="nombre" class="col-form-label">Nombre</label>
 						<input required="" value="{{ $usu->nombre }}"  id="nombre" name="nombre" type="text" class="form-control">
 					</div>
 					<div class="form-group col-xl-6" style="float: left;">
 						<label for="apellido" class="col-form-label">Apellido</label>
 						<input required="" value="{{ $usu->apellido }}" id="apellido" name="apellido" type="text" class="form-control">
 					</div>
 					<div class="form-group col-xl-6" style="float: left;">
 						<label for="cedula" class="col-form-label">Cédula</label>
 						<input required="" value="{{ $usu->cedula }}" id="cedula" name="cedula" type="number" class="form-control">
 					</div>
 					<div class="form-group col-xl-6" style="float: left;">
 						<label for="email" class="col-form-label">Email</label>
 						<input required="" value="{{ $usu->email }}" id="email" name="email" type="email" class="form-control">
 					</div>
 					
 					<div class="form-group col-xl-12" style="float: left;">
 						<label for="id_pnf" class="col-form-label">PNF que pertenece</label>
 						<select id="id_pnf" name="id_pnf" class="form-control">
 							<option value="">Seleccione...</option>
 							@foreach($datosPnf as $datosPnfs)

 							<option value="{{ $datosPnfs->id }}" @if($usu->id_pnf=== $datosPnfs->id) selected='selected' @endif>{{ $datosPnfs->nombre }}</option>
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
 						<label for="usuario" class="col-form-label">Usuario</label>
 						<input required="" value="{{ $usu->usuario }}" id="usuario" name="usuario" type="text" class="form-control">
 					</div>
 					<div class="form-group col-xl-12" style="float: left;">
 						<label for="contraseña" class="col-form-label">Contraseña</label>
 						<input required="" value="{{ $usu->password }}" id="contraseña" name="contraseña" type="password" class="form-control">
 					</div>

 					<div class="form-group col-xl-12" style="float: left;">
 						<label for="con_contraseña" class="col-form-label">Confirmar Contraseña</label>
 						<input required="" value="{{ $usu->password }}" id="con_contraseña" name="con_contraseña" type="password" class="form-control">
 					</div>

 					<div class="form-group col-xl-12" style="float: left;">
 						<a href="../" class="btn btn-rounded btn-default">Cancelar</a>
 						<button class="btn btn-rounded btn-primary">Modificar</button> 
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