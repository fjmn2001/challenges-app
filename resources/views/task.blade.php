@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <p>Tareas</p>
                        <a href="{{ route("home") }}" class="btn btn-primary btn-sm">Regresar</a>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <label for="description">Descripcion</label>
                                    <input type="text" class="form-control" id="description" name="description" value="{{$task['description']}}"
                                           aria-describedby="emailHelp" placeholder="Descripcion" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="due_date">Fecha maxima de ejecucion</label>
                                    <input type="text" class="form-control" id="due_date" name="due_date" value="{{$task['due_date']}}" readonly>
                                </div>
                                <br/>
                                <hr/>
                                <div>
                                    <form method="post" action="{{ url("/tasks/{$task['id']}/logs") }}">
                                        @csrf
                                        <div class="form-group">
                                            <label for="description">Comentario</label>
                                            <input type="text" class="form-control" id="comment" name="comment" aria-describedby="emailHelp" placeholder="Comment" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Guardar logs</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-sm-5">
                                <h2>Logs</h2>
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>Comentario</th>
                                        <th>Fecha de creacion</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($logs as $log) {?>
                                    <tr>
                                        <td>{{$log['comment']}}</td>
                                        <td>{{$log['created_at']}}</td>
                                    </tr>
                                    <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
