@extends('layouts.app')
@section('css')
<style type="text/css">
    a:hover{
        text-decoration: unset;
    }
</style>
@endsection
@section('content')
<div class="row mb-2 mb-xl-3">
    <div class="col-auto d-none d-sm-block">
        <h3><strong>Inicio</strong></h3>
    </div>
</div>
<div class="row">
    @if(Auth::user()->profile_id == 3)
    <div class="col-sm-4">
        <div class="card">
            <a href="{{ route('users.index') }}">
                <div class="card-body">
                    <div class="row">
                        <div class="col mt-0">
                            <h5 class="card-title">Usuarios registrados</h5>
                        </div>

                        <div class="col-auto">
                            <div class="stat text-primary">
                                <i class="align-middle" data-feather="users"></i>
                            </div>
                        </div>
                    </div>
                    <h1 class="mt-1 mb-3">{{ $users }}</h1>
                </div>
            </a>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <a href="{{ route('questions.index') }}">
                <div class="card-body">
                    <div class="row">
                        <div class="col mt-0">
                            <h5 class="card-title">Preguntas registradas</h5>
                        </div>

                        <div class="col-auto">
                            <div class="stat text-primary">
                                <i class="align-middle" data-feather="info"></i>
                            </div>
                        </div>
                    </div>
                    <h1 class="mt-1 mb-3">{{ $questions }}</h1>
                </div>
            </a>
        </div>
    </div>
    @endif
    <div class="col-sm-4">
        <div class="card">
            <a href="{{ route('questions.index') }}">
                <div class="card-body">
                    <div class="row">
                        <div class="col mt-0">
                            <h5 class="card-title">Calificaciones</h5>
                        </div>

                        <div class="col-auto">
                            <div class="stat text-primary">
                                <i class="align-middle" data-feather="clipboard"></i>
                            </div>
                        </div>
                    </div>
                    <h1 class="mt-1 mb-3">{{ $qualifications }}</h1>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection