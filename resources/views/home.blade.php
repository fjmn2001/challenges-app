@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <p>Tareas</p>
                        <a href="{{ url("/task") }}" class="btn btn-primary btn-sm">Crear nueva tarea</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th width="40%" class="text-center">Descripcion</th>
                                <th width="20%" class="text-center">Fecha</th>
                                <th width="20%" class="text-center">Usuario</th>
                                <th width="20%" class="text-center">Opciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>John</td>
                                <td>Doe</td>
                                <td></td>
                                <td>
                                    <a href="{{ url("/task/1") }}" class="btn btn-primary btn-sm btn-block">Ver
                                        tarea</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Mary</td>
                                <td>Moe</td>
                                <td></td>
                                <td>
                                    <a href="{{ url("/task/2") }}" class="btn btn-primary btn-sm btn-block">Ver
                                        tarea</a>
                                </td>
                            </tr>
                            <tr>
                                <td>July</td>
                                <td>Dooley</td>
                                <td></td>
                                <td>
                                    <a href="{{ url("/task/3") }}" class="btn btn-primary btn-sm btn-block">Ver
                                        tarea</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
