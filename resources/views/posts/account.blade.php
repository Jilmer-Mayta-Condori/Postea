@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="container text-center">
                        <h1 class="display-4">Mi Cuenta</h1>
                    </div>
                </div>
                <br>
                <div align="center">
                    <img src="{{asset('imagenes/user.png')}}" class="d-block w-10" alt="...">
                </div>
                    
                <div class="card-body">
                    
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control-plaintext" id="staticName" value="{{ $usuario->name }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail</label>
                        <div class="col-md-6">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="{{ $usuario->email }}">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="fecha" class="col-md-4 col-form-label text-md-right">Fecha Creacion</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control-plaintext" id="staticDate" value="{{ $usuario->created_at }}">
                        </div>
                    </div>

                    <div class="form-group row mb-6">
                        <div class="col-md-6 offset-md-4">
                            <a href="{{ action('UserController@editar', $usuario->id)}}" type="submit" class="btn btn-primary btn-lg">
                                Editar Cuenta
                            </a>
                            <a href="{{action('UserController@delete')}}" type="submit" class="btn btn-secondary btn-lg">
                                Eliminar Cuenta
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection