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
 			<h2 class="pageheader-title">Dedicación</h2>
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
 						<li class="breadcrumb-item active" aria-current="page">Dedicación</li>
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
 			<h5 class="card-header">Lista de Dedicaciones <a href="../dedicacion/create" class="btn btn-rounded btn-primary" style="width: 100px;float: right; margin-left: 10px;">+ Registar</a></h5>
		
 			<div class="card-body">

 				<div class="table-responsive">

 					<table class="table table-striped table-bordered first">
 						<thead>
 							<tr>
 								<th hidden=""></th>
 								<th>Nombre</th>
 								<th>Horas acreditables</th>
 								<th>Horas de aula</th>
 								<th>Horas totales</th>
 								<th>Opciones</th>
 							</tr>
 						</thead>
 						<tbody>
 							
 				@foreach($est as $ests)
 							<tr>

 								<td hidden="">{{$ests->id}}</td>
 								<td>{{$ests->nombre}}</td>
 								<td>{{$ests->horas_acreditables}}</td>
 								<td>{{$ests->horas_aula}}</td>
 								<td>{{$ests->horas_totales}}</td>
 								<td>


 									<a href="{{ route('dedicacion.edit',$ests->id) }}"><button href="#" class="btn btn-rounded btn-info">Modificar</button></a>


						<a href="#" class="btn btn-rounded btn-danger" v-on:click.prevent="confirmEstado({{$ests}})">Eliminar</a>

 						

 								</td>

 							</tr>
 							@endforeach	
 						</tbody>
 						
 					</table>
 					@include('dedicacion/Confirm')
 				</div>
 			</div>
 		</div>
 	</div>
 	<!-- ============================================================== -->
 	<!-- end basic table  -->
 	<!-- ============================================================== -->




 </div>

@endsection