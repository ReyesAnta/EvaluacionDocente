@extends('layouts.app')

@section('content')
<div class="row mb-2 mb-xl-3">
	<div class="col-auto d-none d-sm-block">
		<h3><strong>Nueva calificación</strong></h3>
	</div>
</div>
<div class="card">
	<div class="card-body">
		{!! Form::open(['route' => 'ratings.store']) !!}
		<div class="row">
			<div class="col-md-12 mb-3">
				<label class="form-label">Profesor</label>
				{!! Form::select('user_id',$users, null, ['class' => 'form-control select2','id' => 'user_id','data-validation' => 'required']) !!}
			</div>
			<div class="col-md-12 mb-3">
				<div class="table-responsive">
					<table class="table border">
						<tbody>
							@foreach($questions as $key => $item)
							<input type="hidden" name="question" value="{{ $questions->count() }}">
							<input type="hidden" name="question-{{ $key }}[id]" value="{{ $item->id }}">
							<tr style="background-color: #3b7ddd;color: #fff;text-transform: uppercase;">
								<td>{{ $item->nombre }}</td>
								<td>Ponderación max. 20 pts</td>
							</tr>
							<tr>
								<td>Excelente</td>
								<td>
									<label class="form-check">
										<input class="form-check-input" type="radio" value="20" name="question-{{ $key }}[puntaje]" required>
										<span class="form-check-label">
											20
										</span>
									</label>
								</td>
								</tr>
							<tr>
								<td>Bueno</td>
								<td>
									<label class="form-check">
										<input class="form-check-input" type="radio" value="15" name="question-{{ $key }}[puntaje]" required>
										<span class="form-check-label">
											15
										</span>
									</label>
								</td>
								</tr>
							<tr>
								<td>Regular</td>
								<td>
									<label class="form-check">
										<input class="form-check-input" type="radio" value="10" name="question-{{ $key }}[puntaje]" required>
										<span class="form-check-label">
											10
										</span>
									</label>
								</td>
								</tr>
							<tr>
								<td>Pesimo</td>
								<td>
									<label class="form-check">
										<input class="form-check-input" type="radio" value="5" name="question-{{ $key }}[puntaje]" required>
										<span class="form-check-label">
											5
										</span>
									</label>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
			<div class="mb-3 col-sm-12 text-end">
				<a href="{{ route('ratings.index') }}" class="btn btn-danger">
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