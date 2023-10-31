@extends('layouts.app')

@section('content')
@include('sweetalert::alert')
<div class="row mb-2 mb-xl-3">
	<div class="col-auto d-none d-sm-block">
		<h3><strong>Editar usuario</strong></h3>
	</div>
</div>
<div class="card">
	<div class="card-body">
		{!! Form::model($users, ['route' => ['users.update', $users->id], 'method' => 'patch']) !!}
		@include('users.fields')
		{!! Form::close() !!}
	</div>
</div>
@endsection