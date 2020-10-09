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
 			<h2 class="pageheader-title"><figure><img  style="width: 7%; margin-top: -20px; float: left;" src="{{ asset('assets/images/estado.png') }}"></figure>Estado</h2>
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
 						<li class="breadcrumb-item active" aria-current="page">Estado</li>
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
 			<h5 class="card-header">Lista de Estados</h5>

 			<div class="card-body">

 				<div class="table-responsive">
        <form method="GET" action="{{ action('RespaldoRestaurarController@create')}}" accept-charset="UTF-8" enctype="multipart/form-data">


 						<button class="btn btn-rounded btn-primary">Respaldar</button>

 				</form>


 					@include('parroquia/Confirm')
 				</div>
 			</div>
 		</div>
 	</div>
 	<!-- ============================================================== -->
 	<!-- end basic table  -->
 	<!-- ============================================================== -->




 </div>

@endsection
