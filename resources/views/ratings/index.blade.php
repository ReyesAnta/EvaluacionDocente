@extends('layouts.app')
@section('content')
@include('sweetalert::alert')
<div class="row mb-2 mb-xl-3">
	<div class="col-auto d-none d-sm-block">
		<h3><strong>Calificaciones</strong></h3>
	</div>
	@if(Auth::user()->profile_id != 2)
	<div class="col-auto ms-auto text-end mt-n1">
		<a href="{{ route('ratings.create') }}" class="btn btn-primary">Nuevo registro</a>
	</div>
	@endif
</div>
<div class="card">
	<div class="card-body">
		<div class="row">
			<div class="col-md-3 mb-3">
				<label class="col-form-label">Fecha Inicio</label>
				{!! Form::date('fecha_inicio', $fecha_inicio, ['class' => 'form-control','id' => 'fecha_inicio']) !!}
			</div>
			<div class="col-md-3 mb-3">
				<label class="col-form-label">Fecha Fin</label>
				{!! Form::date('fecha_fin', $fecha_fin, ['class' => 'form-control','id' => 'fecha_fin']) !!}
			</div>
			<div class="col-md-12 mb-3">
				<div class="table-responsive">
					<table id="ratings" class="table table-striped text-center" style="width:100% !important">
						<thead>
							<tr>
								<th>#</th>
								@if(Auth::user()->profile_id != 2)
								<th>Profesor</th>
								@endif
								<th>Cargo</th>
								<th>Curso</th>
								@if(Auth::user()->profile_id != 1)
								<th>Evaluador</th>
								@endif
								<th>Fecha registro</th>
								<th>Promedio</th>
								<th>Estado</th>
								<th class="no-export">Acciones</th>
							</tr>
						</thead>
					</table>
				</div>
			</div>
		</div>		
	</div>
</div>

<div class="modal fade" id="modal_qualifications" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="card-title">Preguntas</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body row">
				<div class="col-md-12 mb-3">
					<div class="table-center">
						<table class="table text-center">
							<thead>
								<tr>
									<th>#</th>
									<th>Pregunta</th>
									<th>Puntaje</th>
								</tr>
							</thead>
							<tbody id="table_questions">
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection

@section('js')
<script>
	$("#fecha_inicio").change(function(event) {
		lista();
	});
	$("#fecha_fin").change(function(event) {
		lista();
	});
	lista();
	function lista(){
		let fecha_inicio = $("#fecha_inicio").val();
		let fecha_fin = $("#fecha_fin").val();
		let data = {fecha_inicio: fecha_inicio,fecha_fin: fecha_fin};
		let table = $('#ratings').DataTable({
			"language": {
				"lengthMenu": "Ver los _MENU_ Primeros Registros",
				"info": "_END_ de _TOTAL_ registros",
				"infoEmpty": "No se encontraron registros",
				"infoFiltered": "(Filtrado de _MAX_ total entradas)",
				"loadingRecords": "Cargando...",
				"processing": "Procesando...",
				"sSearch": "BUSCAR:",
				"sZeroRecords": "No se encontraron resultados",
				"sEmptyTable": "Ningún dato disponible en esta tabla",

				"oPaginate": {
					"sFirst": "Primero",
					"sLast": "Último",
					"sNext": "Siguiente",
					"sPrevious": "Anterior"
				},
				"fnInfoCallback": null
			},
			"aProcessing": true,
			"aServerSide": true,
			"destroy":true,
			"ajax":{
				"method":"POST",
				"url": "{{ route('ratings.list') }}",
				"data": data
			},
			"iDisplayLength":10,
			dom: 'Bfrtip',
			buttons: [
			{
				extend: 'excelHtml5',
				title: 'Evaluaciones - Usuarios',
				className: 'btn btn-success',
				text: '<i class="far fa-file-excel"></i> EXCEL',
				exportOptions: { columns: ":not(.no-export)" }
			},
			{
				extend: 'pdfHtml5',
				title: 'Evaluaciones - Usuarios',
				orientation: 'landscape',
				className: 'btn btn-danger',
				text: '<i class="far fa-file-pdf"></i> PDF',
				exportOptions: { columns: ":not(.no-export)" }
			},
			],
		});
		table.on( 'draw', function () {
			set_tooltip();
		});
	}

	function delete_register(id){
		Swal.fire({
			title: '¿Esta seguro de eliminar este registro?',
			text: "",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Confirmar',
			cancelButtonText: 'Cancelar'
		}).then((result) => {
			if (result.value) {
				loading("show");
				$.get("{{URL::to('/ratings/delete')}}" + "/" + id, function(res) {
					loading("hide");
					if(res.result){
						Swal.fire(res.message,"","success");
						lista();
					}else{
						Swal.fire(res.message,"","error");
					}
				});

			}
		})
	}

	function ver_calificacion(id)
	{
		$("#modal_qualifications").modal("show");
		loading("show");
		$.get(`/ratings/show/${id}`, function(data) {
			loading("hide");
			$("#table_questions").html(data);
		});
	}
</script>
@endsection