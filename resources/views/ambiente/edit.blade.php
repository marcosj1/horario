 @extends('app')


 @section('content')

 @include('Validacion')


 <!-- ============================================================== -->
 <!-- pageheader -->
 <!-- ============================================================== -->
 <div class="row">
 	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
 		<div class="page-header">
 			<h2 class="pageheader-title"><figure><img  style="width: 7%; margin-top: -20px; float: left;" src="{{ asset('assets/images/estado.png') }}"></figure>Ambiente</h2>
 			<p class="pageheader-text"></p>
 			<div class="page-breadcrumb">
 				<nav aria-label="breadcrumb">
 					<ol class="breadcrumb">

 						<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Ubicación</a></li>
 						<li class="breadcrumb-item active" aria-current="page">Ambiente</li>
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

 				<form action="{{ route('ambiente.update', $est->id) }}" method="POST">
 					@method('PATCH')
 					@csrf

          <div class="form-group col-xl-4" style="float: left;">
            <label for="id_sede" class="col-form-label">Sede</label>
            <select id="id_sede" name="id_sede" class="form-control">
              <option value="">Seleccione...</option>
              @foreach($datosestado as $datosestados)

              <option value="{{ $datosestados->id }}" @if($est->id_sede=== $datosestados->id) selected='selected' @endif>{{ $datosestados->nombre }}</option>
              @endforeach
            </select>
          </div>

 					<div class="form-group" >
 						<label for="nombre" class="col-form-label">Nombre del Ambiente</label>
 						<input id="nombre" value="{{ $est->nombre }}" name="nombre" type="text" class="form-control">
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
