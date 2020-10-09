 @extends('app')

 @section('content')

 <div class="row">
 	<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
 		<div class="page-header">
 			<h2 class="pageheader-title"><figure><img  style="width: 7%; margin-top: -20px; float: left;" src="{{ asset('assets/images/parroquia.png') }}"></figure>Parroquia</h2>
 			<p class="pageheader-text"></p>
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
 			<h5 class="card-header">Nuevo Registro</h5>
 			<div class="card-body">


 				<form action="/parroquia" method="POST">
 					@csrf




 					<div class="form-group col-xl-4" style="float: left;">
 						<label for="id_estado" class="col-form-label">Estado</label>
 						<select id="id_estado" name="id_estado" class="form-control">
 							<option value="">Seleccione...</option>
 							@foreach($esta as $estas)
 							<option value="{{$estas->id}}">{{$estas->nombre}}</option>
 							@endforeach
 						</select>  			
 					</div>

 					<div class="form-group col-xl-4" style="float: left;">
 						<label for="id_municipio" class="col-form-label">Municipio</label>
 						<select id="id_municipio" name="id_municipio" class="form-control">
 							<option value="">Seleccione...</option>
 							
 						</select>  			
 					</div>



 					<div class="form-group col-xl-4" style="float: left;">
 						<label for="nombre" class="col-form-label">Nombre</label>
 						<input required="" id="nombre" name="nombre" type="text" class="form-control">
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


@section('script')


 	<script>

$("#id_estado").change(function(event){
  $.get("../municipios/"+event.target.value+"",function(response, id_estado){
    console.log(response);
    $("#id_municipio").empty();
   $("#id_municipio").append("<option value=''>Seleccione...</option>");
    for(i=0; i<response.length; i++){
      $("#id_municipio").append("<option value='"+response[i].id+"'>"+response[i].nombre+"</option>");
    }

  });
});



  /*
 		$(document).ready(function(){
 				$('#id_estado').on('change', funcion(){
 						var esta_id = $(this).val();
 						if($.trim(esta_id) != ''){
 								$.get('municipio', {esta_id: esta_id}, function(esta){
 										$('#id_estado').empty();
 										$('#id_estado').append("<option value=''>Seleccione un Municipio</option>");

 										$.each(esta, function(index, value){
 											$('#id_estado').append("<option value='" + index + "'>"+ value +"</option>");	
 										})



 								});
 						}
 				});

 		});



  /*$(document).ready(function(){
    $("#id_estado").change(function(){
      var id_estado = $(this).val();
      $.get('municipio/'+id_estado, function(data){
//esta el la peticion get, la cual se divide en tres partes. ruta,variables y funcion
        console.log(data);
          var municipio_seleccionado = '<option value="">Seleccione Municipio</option>'
            for (var i=0; i<data.length;i++)
              municipio_seleccionado+='<option value="'+data[i].id+'">'+data[i].nombre+'</option>';

            $("#id_municipio").html(municipio_seleccionado);

      });
    });
  });*/
</script>
@endsection