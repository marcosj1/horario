 @extends('app')


 @section('content')




 <!-- ============================================================== -->
 <!-- pageheader -->
 <!-- ==============================================================

 -->




 <!-- ============================================================== -->
 <!-- end pageheader -->
 <!-- ============================================================== -->
 <div id="crud" class="row">


 	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
 		<div class="page-header">
 			<h2 class="pageheader-title"><figure><img  style="width: 10%; float: left;" src="{{ asset('assets/images/usuario.png') }}"></figure> Usuario</h2>
 			@if(session()->has('msj'))
 			<div class="alert alert-success alert-dismissible fade show" role="alert" style="float: right;">
 				<strong>{{ session('msj') }}</strong>
 				<a href="#" class="close" data-dismiss="alert" aria-label="Close">
 					<span aria-hidden="true">&times;</span>
 				</a>
 			</div>



 			@endif

 			<p class="pageheader-text"></p>
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
 	<!-- ============================================================== -->
 	<!-- basic table  -->
 	<!-- ============================================================== -->
 	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
 		<div class="card">
 			<h5 class="card-header">Lista de Usuarios <a href="../usuario/create" class="btn btn-rounded btn-primary" style="width: 100px;float: right; margin-left: 10px;">+ Registar</a></h5>

 			<div class="card-body">

 				<div class="table-responsive">

 					<table class="table table-striped table-bordered first">
 						<thead>
 							<tr>
 								<th hidden=""></th>
 								<th>Nombre</th>
 								<th>Apellido</th>
 								<th>Cédula</th>
 								<th>Correo</th>
 								<th>Pnf</th>
 								<th>Opciones</th>
 							</tr>
 						</thead>
 						<tbody>

 							@foreach($usu as $usus)
 							<tr>

 								<td hidden="">{{$usus->id_usuario}}</td>
 								<td>{{$usus->nom_usuario}}</td>
 								<td>{{$usus->ape_usuario}}</td>
 								<td>{{$usus->cedu_usuario}}</td>
 								<td>{{$usus->email_usuario}}</td>
 								<td>{{$usus->nom_pnf}}</td>
 								<td>

                  @can('usuario.edit')
 									<a href="{{ route('usuario.edit',$usus->id_usuario) }}"><button href="#" class="btn btn-rounded btn-info">Modificar</button></a>
                  @endcan

                  
 									<a href="#" class="btn btn-rounded btn-danger" v-on:click.prevent="confirmDocente({{$usus}})">Eliminar</a>



 								</td>

 							</tr>
 							@endforeach
 						</tbody>

 					</table>
 					@include('usuario/Confirm')
 				</div>
 			</div>
 		</div>
 	</div>
 	<!-- ============================================================== -->
 	<!-- end basic table  -->
 	<!-- ============================================================== -->




 </div>

 @endsection
