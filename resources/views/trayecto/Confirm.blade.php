

<form method="POST" v-on:submit.prevent="deleteTrayecto(eliminarTrayecto.id_trayecto)">

<div class="modal fade" id="confirm">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4>¿Desea Eliminar Este Registro?</h4>
				<button type="button" class="close" data-dismiss="modal">
					<span>&times;</span>
				</button>

			</div>

			<div class="modal-body">
				<center>
					
					<h5>Trayecto: @{{ eliminarTrayecto.nom_trayecto }}<br>
						Perteneciente al PNF-@{{ eliminarTrayecto.nom_pnf }}
					</h5>
				</center>
				<span v-for="error in errors" class="text-danger">@{{ error }}</span>
			</div>
			<div class="modal-footer">


					
					<input type="submit" class="btn btn-rounded btn-danger" value="Eliminar">
			
			</div>
			
		</div>
	</div>

</div>
</form>
