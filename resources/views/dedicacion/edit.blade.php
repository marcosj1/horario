 @extends('app')


 @section('content')
 
 @include('Validacion')


 <!-- ============================================================== -->
 <!-- pageheader -->
 <!-- ============================================================== -->
 <div class="row">
 	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
 		<div class="page-header">
 			<h2 class="pageheader-title">Dedicación</h2>
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

 				<form action="{{ route('dedicacion.update', $est->id) }}" method="POST">
 					@method('PATCH')
 					@csrf
 					
 					<div class="form-group col-xl-4" style="float: left;">
 						<label for="nombre" class="col-form-label">Nombre del Dedicación</label>
 						<input required="" value="{{ $est->nombre }}" id="nombre" name="nombre" type="text" class="form-control">
 					</div>
 					<div class="form-group col-xl-4" style="float: left;">
 						<label for="horas_acreditables" class="col-form-label">Horas Acreditables</label>
 						<input required="" value="{{ $est->horas_acreditables }}" onkeyup="Suma();" id="horas_acreditables" name="horas_acreditables" type="number" class="form-control" maxlength="2">
 					</div>
 					<div class="form-group col-xl-4" style="float: left;">
 						<label for="horas_aula" class="col-form-label">Horas de Aula</label>
 						<input required="" value="{{ $est->horas_aula }}" onkeyup="Suma();" id="horas_aula" name="horas_aula" type="number" class="form-control" maxlength="2">
 					</div>
 					<div class="form-group col-xl-4" style="float: left;">
 						<label for="horas_totales" class="col-form-label">Horas Totales</label>
 						<input required=""  value="{{ $est->horas_totales }}" id="horas_totales" name="horas_totales" type="number" class="form-control" >
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
<script>


function Suma(){
	var num1 = document.getElementById("horas_acreditables").value;
	var num2 = document.getElementById("horas_aula").value;

	valor1 = parseInt(num1);
	valor2 = parseInt(num2);

		if (isNaN(valor1)) {
			valor1=0;
		}
		if (isNaN(valor2)) {
			valor2=0;
		}
	document.getElementById("horas_totales").value = valor1 + valor2;
}

</script>  
@endsection