<div class="row">
	<div class="col-md-12">
		<div class="mb-3">
			<label class="form-label">Nombre</label>
			{!! Form::text('nombre', null, ['class' => 'form-control','maxlength' => '255','id' => 'nombre','data-validation' => 'required']) !!}
		</div>
	</div>
	<div class="mb-3 col-sm-12 text-end">
		<a href="{{ route('questions.index') }}" class="btn btn-danger">
			<i class="align-middle" data-feather="chevrons-left"></i>
			Cancelar
		</a>
		<button type="submit" class="btn btn-primary">
			<i class="align-middle" data-feather="save"></i>
			Guardar
		</button>
	</div>
</div>

@section('js')
<script type="text/javascript">
	@if(isset($users))
	validar_cargo();
	@endif
	$("#profile_id").change(function(event) {
		validar_cargo();
	});

	function validar_cargo()
	{
		let profile_id = $("#profile_id").val();
		if(profile_id == 1 || profile_id == 3){
			$(".cargo").addClass('d-none');
		}else if(profile_id == 2){
			$(".cargo").removeClass('d-none');
		}
	}
</script>
@endsection