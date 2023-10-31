<div class="row">
	<div class="col-md-12">
		<div class="mb-3">
			<label class="form-label">Perfil</label>
			@if(isset($users))
			@if($users->id == 1)
			{!! Form::text('profile_id', $users->profile->nombre, ['class' => 'form-control','maxlength' => '255','disabled']) !!}
			@else
			{!! Form::select('profile_id',$profile, null, ['class' => 'form-select','data-validation' => 'required','id' => 'profile_id']) !!}
			@endif
			@else
			{!! Form::select('profile_id',$profile, null, ['class' => 'form-select','data-validation' => 'required','id' => 'profile_id']) !!}
			@endif
		</div>
		<div class="mb-3">
			<label class="form-label">Cargo</label>
			@if(isset($users))
			@if($users->id == 1)
			{!! Form::text('position_id', $users->position->nombre, ['class' => 'form-control','maxlength' => '255','disabled']) !!}
			@else
			{!! Form::select('position_id',['' => 'Seleccionar'], null, ['class' => 'form-select','id' => 'position_id','data-validation' => 'required']) !!}
			@endif
			@else
			{!! Form::select('position_id',['' => 'Seleccionar'], null, ['class' => 'form-select','id' => 'position_id','data-validation' => 'required']) !!}
			@endif
		</div>
		<div class="mb-3 course d-none">
			<label class="form-label">Curso</label>
			{!! Form::select('course_id',$course, null, ['class' => 'form-select','data-validation' => 'required']) !!}
		</div>
		<div class="mb-3">
			<label class="form-label">Nombres</label>
			{!! Form::text('nombres', null, ['class' => 'form-control','maxlength' => '255','id' => 'nombres','data-validation' => 'required']) !!}
		</div>
		<div class="mb-3">
			<label class="form-label">Correo</label>
			{!! Form::email('email', null, ['class' => 'form-control','maxlength' => '255','id' => 'email','data-validation' => 'required']) !!}
		</div>
		<div class="mb-3">
			<label class="form-label">Contraseña</label>
			@if(isset($users))
			{!! Form::password('password', ['class' => 'form-control','maxlength' => '255','id' => 'password']) !!}
			@else
			{!! Form::password('password', ['class' => 'form-control','maxlength' => '255','id' => 'password','data-validation' => 'required']) !!}
			@endif
		</div>
	</div>
	<div class="mb-3 col-sm-12 text-end">
		<a href="{{ route('users.index') }}" class="btn btn-danger">
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
		loading("show");
		$.get(`/get_position/${profile_id}`, function(res) {
			loading("hide");
			if(res.result){
				$('#position_id').empty();
				$('#position_id').prepend("<option value>Seleccionar</option>");
				$.each(res.data, function(index, val) {
					$('#position_id').append($('<option />', {
						text: val.nombre,
						value: val.id
					}));
				});
				@if(isset($users))
				$('#position_id').val("{{ $users->position_id }}");
				@endif
			}
		});
		if(profile_id == 2){
			$(".course").removeClass('d-none');
		}else{
			$(".course").addClass('d-none');
		}
	}
</script>
@endsection