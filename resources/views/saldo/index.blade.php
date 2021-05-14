@extends('layouts.app')
@section('content')
@if (\Session::has('edit'))
    <div class="alert alert-success">
        <p> {{\Session::get('edit')}}</p>
    </div>
@endif
@if (\Session::has('fallo'))
    <div class="alert alert-danger">
        <p> {{\Session::get('fallo')}}</p>
    </div>
@endif
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <table class="table table-striped mt-4">
                    <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Nick</th>
                            <th scope="col">Saldo</th>
                            <th scope="col">Editar Saldo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($usuarios as $usuarios)
                        <tr>
                            <td>{{ $usuarios->name }}</td>
                            <td>{{ $usuarios->nick }}</td>
                            <td>{{ $usuarios->saldo }}</td>
                            <td>
                                <a href=""  class="btn btn-outline-success" data-toggle="modal" data-target="#editarModal{{$usuarios->id}}" data-nick="{{$usuarios->nick}}" > Agregar Saldo</a>
                                    <div class="modal fade" id="editarModal{{$usuarios->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editarModal{{$usuarios->id}}">Agregar Saldo</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST" action="{{route('csaldo.update',$usuarios->id)}}">
                                                @csrf @method('PUT')
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Nombre:</label>
                                                    <input type="text" class="form-control" id="recipient-name" value="{{$usuarios->name}} " disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label for="recipient-name" class="col-form-label">Nick:</label>
                                                    <input type="text" class="form-control" id="recipient-name" value="{{$usuarios->nick}} " disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label for="message-text" class="col-form-label">Saldo a agregar:</label>
                                                    <input type="number" class="form-control" name="saldo" value="0" id="message-text">
                                                </div>
                                                
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                                                <button type="submit" name="editar" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Agregar Saldo</a>
                                                </form>
                                            </div>
                                            </div>
                                        </div>
                                    </div>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!--Modal Insertar -->

@endsection