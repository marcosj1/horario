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
 			<h2 class="pageheader-title"><figure><img  style="width: 7%; margin-top: -20px; float: left;" src="{{ asset('assets/images/parroquia.png') }}"></figure>Parroquia</h2>
 			@if(session()->has('msj'))
 			<div class="alert alert-success alert-dismissible fade show" role="alert" style="float: right;">
 				<strong>{{ session('msj') }}</strong>
 				<a href="#" class="close" data-dismiss="alert" aria-label="Close">
 					<span aria-hidden="true">&times;</span>
 				</a>
 			</div>



 			@endif

 			<p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
 			<div class="page-breadcrumb">
 				<nav aria-label="breadcrumb">
 					<ol class="breadcrumb">
 						
 						<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Ubicación</a></li>
 						<li class="breadcrumb-item active" aria-current="page">Parroquia</li>
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
 			<h5 class="card-header">Lista de Parroquias <a href="../parroquia/create" class="btn btn-rounded btn-primary" style="width: 100px;float: right; margin-left: 10px;">+ Registar</a></h5>

 			<div class="card-body">

 				<div class="table-responsive">

 					<table class="table table-striped table-bordered first">
 						<thead>
 							<tr>
 								<th hidden=""></th>
 								<th>Parroquia</th>
 								<th>Municipio</th>
 								<th>Estado</th>
 								<th>Opciones</th>
 							</tr>
 						</thead>
 						<tbody>
 							
 							@foreach($est as $ests)
 							<tr>

 								<td hidden="">{{$ests->id}}</td>
 								<td>{{$ests->nom_parroquia}}</td>
 								<td>{{$ests->nom_municipio}}</td>
 								<td>{{$ests->nom_estado}}</td>
 								<td>


 									<a href="{{ route('parroquia.edit',$ests->id_parroquia) }}"><button href="#" class="btn btn-rounded btn-info">Modificar</button></a>

 									<a href="#" class="btn btn-rounded btn-danger" v-on:click.prevent="confirmEstado({{$ests}})">Eliminar</a>



 								</td>

 							</tr>
 							@endforeach	
 						</tbody>
 						
 					</table>

 				</div>
 			</div>
 		</div>
 	</div>
 	<!-- ============================================================== -->
 	<!-- end basic table  -->
 	<!-- ============================================================== -->




 </div>

 @endsection