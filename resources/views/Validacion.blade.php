
@if(count($errors) > 0)
	<div class="alert alert-danger alert-dismissible fade show" role="alert" style="float: right;">
 		<strong><ul>
 			@foreach($errors->all() as $error)

 			<li>{{$error}}</li>

 			@endforeach
 		</ul></strong>
 		<a href="#" class="close" data-dismiss="alert" aria-label="Close">
 			<span aria-hidden="true">&times;</span>
 		</a>
 	</div>

@endif