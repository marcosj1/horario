 @extends('app')


 @section('content')
 
 @include('Validacion')


 <!-- ============================================================== -->
 <!-- pageheader -->
 <!-- ============================================================== -->
 <div class="row">
 	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
 		<div class="page-header">
 			<h2 class="pageheader-title">Pnf</h2>
 			<p class="pageheader-text"></p>
 			<div class="page-breadcrumb">
 				<nav aria-label="breadcrumb">
 					<ol class="breadcrumb">
 						
 						<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Ubicación</a></li>
 						<li class="breadcrumb-item active" aria-current="page">Pnf</li>
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

 				<form action="{{ route('pnf.update', $est->id) }}" method="POST">
 					@method('PATCH')
 					@csrf
 					<div class="form-group">
 						<label for="nombre" class="col-form-label">Nombre del Pnf</label>
 						<input id="nombre" value="{{ $est->nombre }}" name="nombre" type="text" class="form-control">
 					</div>
 					<div class="form-group">
 						<label for="codigo" class="col-form-label">Código</label>
 						<input id="codigo" value="{{ $est->codigo }}" name="codigo" type="text" class="form-control">
 					</div>
 					<button class="btn btn-rounded btn-primary">Modificar</button>
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