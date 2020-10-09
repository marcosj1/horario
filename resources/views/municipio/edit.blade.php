 @extends('app')


 @section('content')
 


 @if(session()->has('Errormsj'))
 <div class="alert alert-danger" role="alert" style="float: right;">{{ session('Errormsj') }}</div>

 @endif
 <!-- ============================================================== -->
 <!-- pageheader -->
 <!-- ============================================================== -->
 <div class="row">
 	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
 		<div class="page-header">
 			<h2 class="pageheader-title"><figure><img  style="width: 7%; margin-top: -20px; float: left;" src="{{ asset('assets/images/municipio.png') }}"></figure>Municipio</h2>
 			<p class="pageheader-text"></p>
 			<div class="page-breadcrumb">
 				<nav aria-label="breadcrumb">
 					<ol class="breadcrumb">
 						
 						<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Ubicación</a></li>
 						<li class="breadcrumb-item active" aria-current="page">Municipio</li>
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
 			<h5 class="card-header">Modificar Registro </h5>

 			<div class="card-body">

 				<form action="{{ route('municipio.update', $est->id) }}" method="POST">
 					@method('PATCH')
 					@csrf

 					<div class="form-group col-xl-4" style="float: left;">
 						<label for="id_estado" class="col-form-label">Estado</label>
 						<select id="id_estado" name="id_estado" class="form-control">
 							<option value="">Seleccione...</option>
 							@foreach($datosestado as $datosestados)

 							<option value="{{ $datosestados->id }}" @if($est->id_estado=== $datosestados->id) selected='selected' @endif>{{ $datosestados->nombre }}</option>
 							@endforeach
 						</select>  			
 					</div>
 					<div class="form-group col-xl-4" style="float: left;">
 						<label for="nombre" class="col-form-label">Nombre</label>
 						<input required="" value="{{ $est->nombre }}" name="nombre" type="text" class="form-control">
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