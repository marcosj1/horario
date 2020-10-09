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
 			<h2 class="pageheader-title"><figure><img  style="width: 7%; margin-top: -20px; margin-right: 10px; float: left;" src="{{ asset('assets/images/unidad.png') }}"></figure>Unidad Curricular</h2>
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
 						
 						<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Departamento</a></li>
 						<li class="breadcrumb-item active" aria-current="page">Unidad Curricular</li>
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
 			<h5 class="card-header">Lista de Unidades Curriculares <a href="../unidad/create" class="btn btn-rounded btn-primary" style="width: 100px;float: right; margin-left: 10px;">+ Registar</a></h5>

 			<div class="card-body">

 				<div class="table-responsive">

 					<table class="table table-striped table-bordered first">
 						<thead>
 							<tr>
 								<th hidden=""></th>
 								<th>Unidad Curricular</th>
 								<th>Código</th>
 								<th>U.C</th>
 								<th>Opciones</th>
 							</tr>
 						</thead>
 						<tbody>
 							
 							@foreach($est as $ests)
 							<tr>

 								<td hidden="">{{$ests->id}}</td>
 								<td>{{$ests->nom_unidad}}</td>
 								<td>{{$ests->codigo_unidad}}</td>
 								<td>{{$ests->uc_unidad}}</td>
 								<td>
 								<a href="{{ route('unidad.edit',$ests->id_unidad) }}"><button href="#" class="btn btn-rounded btn-info">Modificar</button></a>

 									<a href="#" class="btn btn-rounded btn-danger" v-on:click.prevent="confirmUnidad({{$ests}})">Eliminar</a>
 								</td>
 							</tr>
 							@endforeach	
 						</tbody>
 						
 					</table>
 					@include('unidad/Confirm')
 				</div>
 			</div>
 		</div>
 	</div>
 	<!-- ============================================================== -->
 	<!-- end basic table  -->
 	<!-- ============================================================== -->




 </div>

 @endsection