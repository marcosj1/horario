 @extends('app')


 @section('content')
 
 @include('Validacion')


 <!-- ============================================================== -->
 <!-- pageheader -->
 <!-- ============================================================== -->
 <div class="row">
 	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
 		<div class="page-header">
 			<h2 class="pageheader-title"><figure><img  style="width: 7%; margin-top: -20px; margin-right: 10px; float: left;" src="{{ asset('assets/images/unidad.png') }}"></figure>Unidad Curricular</h2>
 			<p class="pageheader-text"></p>
 			<div class="page-breadcrumb">
 				<nav aria-label="breadcrumb">
 					<ol class="breadcrumb">
 						
 						<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Ubicación</a></li>
 						<li class="breadcrumb-item active" aria-current="page">Unidad Curricular</li>
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

 			<div class="card-body" style="overflow: hidden;">

 				<form action="{{ route('unidad.update', $est->id) }}" method="POST">
 					@method('PATCH')
 					@csrf
 					<div class="form-group col-xl-4" style="float: left;">
 						<label for="nombre" class="col-form-label">Nombre</label>
 						<input required="" value="{{ $est->nombre }}" id="nombre" name="nombre" type="text" class="form-control">
 					</div>
 					<div class="form-group col-xl-4" style="float: left;">
 						<label for="codigo" class="col-form-label">Código</label>
 						<input required="" value="{{ $est->codigo}}"  id="codigo" name="codigo" type="text" class="form-control">
 					</div>
 					<div class="form-group col-xl-4" style="float: left;">
 						<label for="uc" class="col-form-label">UC</label>
 						<input required="" value="{{ $est->uc }}" id="uc" name="uc" type="text" class="form-control">
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