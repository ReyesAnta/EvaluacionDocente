@extends('layouts.app')

@section('content')
<div class="row mb-2 mb-xl-3">
	<div class="col-auto d-none d-sm-block">
		<h3><strong>Nuevo Usuario</strong></h3>
	</div>
</div>
<div class="card">
	<div class="card-body">
		{!! Form::open(['route' => 'users.store']) !!}
		@include('users.fields')
		{!! Form::close() !!}
	</div>
</div>
@endsection