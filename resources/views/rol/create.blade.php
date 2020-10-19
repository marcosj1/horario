 @extends('app')


 @section('content')
 @include('Validacion')

 <!-- ============================================================== -->
 <!-- pageheader -->
 <!-- ============================================================== -->
 <div class="row">
 	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
 		<div class="page-header">
 			<h2 class="pageheader-title"><figure><img  style="width: 7%; margin-top: -20px; float: left;" src="{{ asset('assets/images/estado.png') }}"></figure>Rol</h2>

 			<div class="page-breadcrumb">
 				<nav aria-label="breadcrumb">
 					<ol class="breadcrumb">

 						<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Ubicación</a></li>
 						<li class="breadcrumb-item active" aria-current="page">Rol</li>
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

 				<form id="validationform" data-parsley-validate="" novalidate="" action="/rol" method="POST">
 					@csrf
 					<div class="form-group">
 						<label for="name" class="col-form-label">Nombre del Rol</label>
 						<input required="" id="name" name="name" type="text" class="form-control">
 					</div>

          <div class="form-group">
            <label for="slug" class="col-form-label">Slug del Rol</label>
            <input required="" id="slug" name="slug" type="text" class="form-control">
          </div>

          <div class="form-group">
            <label for="description" class="col-form-label">Dirección de la Rol</label>
            <input required="required" id="description" name="description" type="text" class="form-control">
          </div>

          <hr>



          <h3> Permisos</h3>
          <div class="form-group">

              @foreach($permiso as $permisos)

            <ul class="list-unstyled">

          
                <label>

                  {{ Form::checkbox('permisos[]', $permisos->id, null)}}

                  {{ $permisos->name}}

                  <em>

                </label>

                @endforeach


            </ul>
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
