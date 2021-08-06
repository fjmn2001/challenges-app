@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <p>Tareas</p>
                    <a href="{{ url("/home") }}" class="btn btn-primary btn-sm">Regresar</a>
                </div>
                <div class="card-body">
                   estas en el modulo de tarea {{$id}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
