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
                        <div class="row">
                            <div class="col-sm-8">
                                <form method="post" action="{{ route('store') }}">
                                    @csrf

                                    <div class="form-group">
                                        <label for="description">Descripcion</label>
                                        <input type="text" class="form-control" id="description"name="description" aria-describedby="emailHelp" placeholder="Descripcion" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="due_date">Fecha maxima de ejecucion</label>
                                        <input type="date" class="form-control" id="due_date" name="due_date" placeholder="Fecha maxima de ejecucion" required>
                                        <input type="hidden" class="form-control" id="user_id" name="user_id" value="{{ Auth::user()->id }}">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Guardar tarea</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
