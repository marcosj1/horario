 @extends('app')

 @section('content')

 <div class="row">
 	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
 		<div class="page-header">
 			<h2 class="pageheader-title">Trayecto</h2>
 			<p class="pageheader-text"></p>
 			<div class="page-breadcrumb">
 				<nav aria-label="breadcrumb">
 					<ol class="breadcrumb">
 						<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Ubicación</a></li>
 						<li class="breadcrumb-item active" aria-current="page">Trayecto</li>
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
 	<!-- ==================================s============================ -->
 	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
 		<div class="card">
 			<h5 class="card-header">Nuevo Registro</h5>
 			<div class="card-body">
 				<form action="/trayecto" method="POST">
 					@csrf




 					<div class="form-group col-xl-4" style="float: left;">
 						<label for="nombre" class="col-form-label">Nombre del trayecto</label>
 						<input required="" id="nombre" name="nombre" type="text" class="form-control">
 					</div>
 					<div class="form-group col-xl-4" style="float: left;">
 						<label for="codigo" class="col-form-label">Codigo</label>
 						<input required="" id="codigo" name="codigo" type="text" class="form-control">
 					</div>

 					<div class="form-group col-xl-12" style="float: left;">
 						<a href="../" class="btn btn-rounded btn-default">Cancelar</a>
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