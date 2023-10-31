@extends('layouts.app')

@section('content')
@include('sweetalert::alert')
<div class="row mb-2 mb-xl-3">
	<div class="col-auto d-none d-sm-block">
		<h3><strong>Editar pregunta</strong></h3>
	</div>
</div>
<div class="card">
	<div class="card-body">
		{!! Form::model($questions, ['route' => ['questions.update', $questions->id], 'method' => 'patch']) !!}
		@include('questions.fields')
		{!! Form::close() !!}
	</div>
</div>
@endsection