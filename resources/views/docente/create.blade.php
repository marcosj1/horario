 @extends('app')


 @section('content')
 @include('Validacion')

 <!-- ============================================================== -->
 <!-- pageheader -->
 <!-- ============================================================== -->
 <div class="row">
 	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
 		<div class="page-header">
 			<h2 class="pageheader-title"><figure><img  style="width: 7%; margin-top: -20px; float: left;" src="{{ asset('assets/images/profesor.png') }}"></figure>Docente</h2>
 			
 			<div class="page-breadcrumb">
 				<nav aria-label="breadcrumb">
 					<ol class="breadcrumb">
 						
 						<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Ubicación</a></li>
 						<li class="breadcrumb-item active" aria-current="page">Docente</li>
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
 	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
 		<div class="card">
 			<h5 class="card-header">Nuevo Registro </h5>

 			<div class="card-body">

 				<form id="validationform" data-parsley-validate="" novalidate="" action="/docente" method="POST">
 					@csrf
 					<div class="form-group col-xl-4" style="float: left;">
 						<label for="nombre" class="col-form-label">Nombre</label>
 						<input required="" id="nombre" name="nombre" type="text" class="form-control">
 					</div>
 					<div class="form-group col-xl-4" style="float: left;">
 						<label for="apellido" class="col-form-label">Apellido</label>
 						<input required="" id="apellido" name="apellido" type="text" class="form-control">
 					</div>
 					<div class="form-group col-xl-4" style="float: left;">
 						<label for="cedula" class="col-form-label">Cédula</label>
 						<input required="" id="cedula" name="cedula" type="text" class="form-control">
 					</div>
 					<div class="form-group col-xl-4" style="float: left;">
 						<label for="direccion" class="col-form-label">Dirección</label>
 						<input required="" id="direccion" name="direccion" type="text" class="form-control">
 					</div>
 					<div class="form-group col-xl-4" style="float: left;">
 						<label for="telefono" class="col-form-label">Teléfono</label>
 						<input required="" id="telefono" name="telefono" type="text" class="form-control">
 					</div>
 					<div class="form-group col-xl-4" style="float: left;">
 						<label for="id_especialidad" class="col-form-label">Especialidad</label>
 						<select id="id_especialidad" name="id_especialidad" class="form-control">
 							<option value="">Seleccione...</option>
 							@foreach($Especialidad as $Especialidads)
 							<option value="{{$Especialidads->id}}">{{$Especialidads->nombre}}</option>
 							@endforeach
 						</select>  			
 					</div>
 					<div class="form-group col-xl-4" style="float: left;">
 						<label for="id_categoria" class="col-form-label">Categoría</label>
 						<select id="id_categoria" name="id_categoria" class="form-control">
 							<option value="">Seleccione...</option>
 							@foreach($Categoria as $Categorias)
 							<option value="{{$Categorias->id}}">{{$Categorias->nombre}}</option>
 							@endforeach
 						</select>  			
 					</div>


 					<div class="form-group col-xl-8" style="float: left;">
 						<label for="id_dedicacion" class="col-form-label">Dedicación</label>
 						<select id="id_dedicacion" name="id_dedicacion" class="form-control">
 							<option value="">Seleccione...</option>
 							@foreach($Dedicacion as $Dedicaciones)
 							<option value="{{$Dedicaciones->id}}">{{$Dedicaciones->nombre}}    /    
 							Horas Acreditables:  {{$Dedicaciones->horas_acreditables}}     /    
 							Horas de Aula: {{$Dedicaciones->horas_aula}} 
 							</option> 
 							@endforeach
 						</select>  			
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