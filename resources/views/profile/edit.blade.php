@extends('layouts.app')

@section('content')
@include('sweetalert::alert')
<div class="row mb-2 mb-xl-3">
	<div class="col-auto d-none d-sm-block">
		<h3><strong>Editar perfil</strong></h3>
	</div>
</div>
<div class="card">
	<div class="card-body">
		{!! Form::model($profile, ['route' => ['profile.update', $profile->id], 'method' => 'patch']) !!}
		<div class="row">
			<div class="mb-3 col-md-12">
				<label class="form-label">Nombre del perfil</label>
				{!! Form::text('nombre', null, ['class' => 'form-control','data-validation' => 'required','maxlength' => '200','id' => 'nombre']) !!}
			</div>
			<div class="mb-3 col-md-12">
				<label class="form-label">Descripción</label>
				{!! Form::textarea('descripcion', null, ['class' => 'form-control','maxlength' => '300','rows' => '3','id' => 'descripcion']) !!}
			</div>
			<div class="mb-3 col-md-12">
				<h5 class="card-title">Permisos</h5>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>Módulo</th>
								<th>Lectura</th>
								<th>Escritura</th>
							</tr>
						</thead>
						<tbody>
							@foreach(\App\Models\Module::whereNull('module_id')->get() as $item)
							@php
							$profile_module = \App\Models\ProfileModule::where('profile_id',$profile->id)
							->where('module_id',$item->id)
							->first();

							$lectura = "";
							$escritura = "";

							if($profile_module){
								if($profile_module->lectura == 1){
									$lectura = "checked";
								}
								if($profile_module->escritura == 1){
									$escritura = "checked";
								}
							}
							@endphp
							<tr>
								<td>{{ $item->nombre }}</td>
								<td class="ps-4">
									<input type="checkbox" name="lectura[]" value="{{ $item->id }}" {{ $lectura }}>
								</td>
								<td class="ps-4">
									<input type="checkbox" name="escritura[]" value="{{ $item->id }}" {{ $escritura }}>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
			<div class="mb-3 col-sm-12 text-end">
				<a href="{{ route('profile.index') }}" class="btn btn-danger">
					<i class="align-middle" data-feather="chevrons-left"></i>
					Cancelar
				</a>
				<button type="submit" class="btn btn-primary">
					<i class="align-middle" data-feather="save"></i>
					Guardar
				</button>
			</div>
		</div>
		{!! Form::close() !!}
	</div>
</div>
@endsection