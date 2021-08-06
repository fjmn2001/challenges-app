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
                            <div class="col-sm-7">
                                <div class="form-group">
                                    <label for="description">Descripcion</label>
                                    <input type="text" class="form-control" id="description" name="description"
                                           aria-describedby="emailHelp" placeholder="Descripcion" readonly>
                                </div>
                                <div class="form-group">
                                    <label for="due_date">Fecha maxima de ejecucion</label>
                                    <input type="date" class="form-control" id="due_date" name="due_date" readonly>
                                </div>
                                <br/>
                                <hr/>
                            </div>
                            <div class="col-sm-5">
                                <h2>Logs</h2>
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>Firstname</th>
                                        <th>Lastname</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>John</td>
                                        <td>Doe</td>
                                    </tr>
                                    <tr>
                                        <td>Mary</td>
                                        <td>Moe</td>
                                    </tr>
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
