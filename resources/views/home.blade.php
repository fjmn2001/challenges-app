@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <p>Tareas</p>
                        <a href="{{ route('create') }}" class="btn btn-primary btn-sm">Crear nueva tarea</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th width="40%">Descripcion</th>
                                <th width="20%">Fecha</th>
                                <th width="20%">Usuario</th>
                                <th width="20%" class="text-center">Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($tasks as $task) {?>
                            <tr>
                                <td>{{$task->description}}</td>
                                <td>{{$task->due_date->format('d/m/Y')}}</td>
                                <td>{{$task->usuario->name}}</td>
                                <td>
                                    <a href="{{ url("/tasks/{$task->id}") }}" class="btn btn-primary btn-sm btn-block">Ver tarea</a>
                                </td>
                            </tr>
                            <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
