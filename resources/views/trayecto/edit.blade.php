 @extends('app')


 @section('content')
 


 @if(session()->has('Errormsj'))
 <div class="alert alert-danger" role="alert">{{ session('Errormsj') }}</div>

 @endif
 <!-- ============================================================== -->
 <!-- pageheader -->
 <!-- ============================================================== -->
 <div class="row">
 	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
 		<div class="page-header">
 			<h2 class="pageheader-title">Trayecto</h2>
 			<p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
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
 	<!-- ============================================================== -->
 	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
 		<div class="card">
 			<h5 class="card-header">Modificar Registro </h5>

 			<div class="card-body">

 				<form action="{{ route('trayecto.update', $est->id) }}" method="POST">
 					@method('PATCH')
 					@csrf

 				
 					<div class="form-group col-xl-4" style="float: left;">
 						<label for="nombre" class="col-form-label">Nombre</label>
 						<input required="" value="{{ $est->nombre }}" name="nombre" type="text" class="form-control">
 					</div>
 					<div class="form-group col-xl-4" style="float: left;">
 						<label for="codigo" class="col-form-label">Codigo</label>
 						<input required="" value="{{ $est->codigo }}" name="codigo" type="text" class="form-control">
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