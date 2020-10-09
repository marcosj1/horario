//import datatales from 'datatables'
new Vue({
		el: '#crud',
			data:{
			est:[],
			eliminarEstado:{'id': '', 'nombre': ''},
			eliminarMunicipio:{'id_municipio': '', 'nom_municipio': '', 'nom_estado': ''},
			eliminarTrayecto:{'id_trayecto': '', 'nom_trayecto': '', 'nom_pnf': ''},
			eliminarDocente:{'id': '', 'nombre': '', 'apellido': ''},
			eliminarUnidad:{'id': '', 'nombre': '', 'codigo': '', 'uc': ''},
			errors:[]
		},

		methods:{

			confirmEstado: function($ests){

				this.eliminarEstado.id = $ests.id;
				this.eliminarEstado.nombre = $ests.nombre;
				$('#confirm').modal('show');

				//alert($ests.id);
			},

			confirmUnidad: function($ests){

				this.eliminarUnidad.id = $ests.id_unidad;
				this.eliminarUnidad.nombre = $ests.nom_unidad;
				this.eliminarUnidad.codigo = $ests.codigo_unidad;
				this.eliminarUnidad.uc = $ests.uc_unidad;
				$('#confirm').modal('show');

				//alert($ests.id);
			},
			confirmMunicipio: function($ests){

				this.eliminarMunicipio.id_municipio = $ests.id_municipio;
				this.eliminarMunicipio.nom_municipio = $ests.nom_municipio;
				this.eliminarMunicipio.nom_estado = $ests.nom_estado;
				$('#confirm').modal('show');

				//alert($ests.id);
			},


			confirmDocente: function($ests){

				this.eliminarDocente.id = $ests.id;
				this.eliminarDocente.nombre = $ests.nombre;
				this.eliminarDocente.apellido = $ests.apellido;
				$('#confirm').modal('show');

				//alert($ests.id);
			},

			confirmTrayecto: function($ests){

				this.eliminarTrayecto.id_trayecto = $ests.id_trayecto;
				this.eliminarTrayecto.nom_trayecto = $ests.nom_trayecto;
				this.eliminarTrayecto.nom_pnf = $ests.nom_pnf;
				$('#confirm').modal('show');

				//alert($ests.id);
			},
			deleteEstado: function(id) {
				var url = 'estado/' + id;
				axios.delete(url,
				this.eliminarEstado).then(response => {
				this.eliminarEstado = {'id': '', 'nombre': ''};
				this.errors =[];

				$('#confirm').modal('hide');
				//toastr.success('Registro Eliminado Correctamente');//mensaje
				window.location.href = 'estado';
				}).catch(error => {
				this.errors = error.response.data

				});
			},
				deleteCategoria: function(id) {
				var url = 'categoria/' + id;
				axios.delete(url,
				this.eliminarEstado).then(response => {
				this.eliminarEstado = {'id': '', 'nombre': ''};
				this.errors =[];

				$('#confirm').modal('hide');
				//toastr.success('Registro Eliminado Correctamente');//mensaje
				window.location.href = 'categoria';
				}).catch(error => {
				this.errors = error.response.data

				});
			},

			deleteMunicipio: function(id_municipio) {
				var url = 'municipio/' + id_municipio;
				axios.delete(url,
				this.eliminarMunicipio).then(response => {
				this.eliminarMunicipio = {'id_municipio': '', 'nom_municipio': '', 'nom_estado': ''};
				this.errors=[];
				$('#confirm').modal('hide');
				//toastr.success('Registro Eliminado Correctamente');//mensaje
				window.location.href = 'municipio';
				}).catch(error => {
				this.errors = error.response.data

				});
			},

			deleteUnidad: function(id) {
				var url = 'unidad/' + id;
				axios.delete(url,
				this.eliminarUnidad).then(response => {
				this.eliminarUnidad = {'id': '', 'nombre': '', 'codigo': '', 'uc': ''};
				this.errors=[];
				$('#confirm').modal('hide');
				//toastr.success('Registro Eliminado Correctamente');//mensaje
				window.location.href = 'unidad';
				}).catch(error => {
				this.errors = error.response.data

				});
			},

			deleteTrayecto: function(id_trayecto) {
				var url = 'trayecto/' + id_trayecto;
				axios.delete(url,
				this.eliminarTrayecto).then(response => {
				this.eliminarTrayecto = {'id_trayecto': '', 'nom_trayecto': '', 'nom_pnf': ''};
				this.errors =[];
				$('#confirm').modal('hide');
				//toastr.success('Registro Eliminado Correctamente');//mensaje
				window.location.href = 'trayecto';
				}).catch(error => {
				this.errors = error.response.data

				});
			},


			deleteEspecialidad: function(id) {
				var url = 'especialidad/' + id;
				axios.delete(url,
				this.eliminarEstado).then(response => {
				this.eliminarEstado = {'id': '', 'nombre': ''};
				this.errors =[];

				$('#confirm').modal('hide');
				//toastr.success('Registro Eliminado Correctamente');//mensaje
				window.location.href = 'especialidad';
				}).catch(error => {
				this.errors = error.response.data

				});
			},


				deleteDocente: function(id) {
				var url = 'docente/' + id;
				axios.delete(url,
				this.eliminarDocente).then(response => {
				this.eliminarDocente = {'id': '', 'nombre': '', 'apellido': ''};
				this.errors =[];
				$('#confirm').modal('hide');
				//toastr.success('Registro Eliminado Correctamente');//mensaje
				window.location.href = 'docente';
				}).catch(error => {
				this.errors = error.response.data

				});
			},

				deletePnf: function(id) {
				var url = 'pnf/' + id;
				axios.delete(url,
				this.eliminarEstado).then(response => {
				this.eliminarEstado = {'id': '', 'nombre': ''};
				this.errors =[];
				$('#confirm').modal('hide');
				//toastr.success('Registro Eliminado Correctamente');//mensaje
				window.location.href = 'pnf';
				}).catch(error => {
				this.errors = error.response.data

				});
			},

			deleteDedicacion: function(id) {
				var url = 'dedicacion/' + id;
				axios.delete(url,
				this.eliminarEstado).then(response => {
				this.eliminarEstado = {'id': '', 'nombre': ''};
				this.errors =[];
				$('#confirm').modal('hide');
				//toastr.success('Registro Eliminado Correctamente');//mensaje
				window.location.href = 'dedicacion';
				}).catch(error => {
				this.errors = error.response.data

				});
			},

		

			

	}
});
		
