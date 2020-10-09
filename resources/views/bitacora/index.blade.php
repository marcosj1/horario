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
 			<h2 class="pageheader-title">Bitacora</h2>
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
 						
 						<li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Ubicación</a></li>
 						<li class="breadcrumb-item active" aria-current="page">Bitacora</li>
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
 			<h5 class="card-header">Lista de Registro </h5>
		
 			<div class="card-body">

 				<div class="table-responsive">

 					<table class="table table-striped table-bordered first">
 						<thead>
 							<tr>
 								<th hidden=""></th>
 								<th>Acción</th>
 								<th>Fecha</th>
 								<th>Tabla</th>
 								<th>Usuario</th>
 							</tr>
 						</thead>
 						<tbody>
 							
 				@foreach($est as $ests)
 							<tr>

 								<td hidden="">{{$ests->id}}</td>
 								<td>{{$ests->accion}}</td>
 								<td>{{$ests->fecha}}</td>
 								<td>{{$ests->tabla}}</td>
 								<td>

 								</td>

 							</tr>
 							@endforeach	
 						</tbody>
 						
 					</table>
 					@include('categoria/Confirm')
 				</div>
 			</div>
 		</div>
 	</div>
 	<!-- ============================================================== -->
 	<!-- end basic table  -->
 	<!-- ============================================================== -->




 </div>

@endsection