@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container text-center">
        <h1 class="display-4">{{ $post->title }}</h1>
    </div>
</div>

<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-8">
            <div class="card">
                <img src="{{ asset($post->image) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted">{{ $post->created_at }}</h6>
                    <p class="card-text">{{ $post->content }}</p>
                    @if (Auth::check())
                    <div class="form-group">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Haznos saber tus comentario :D!"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" >Enviar</button>
                    <br>                    
                    @else            
                    <p class="card-text">¿Deseas dejar tu comentario? <a href="{{ route('login') }}">Registrate aqui</a></p> 
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">Comentarios</h5>
                        <p class="card-text">
                        Este es el comentario de un usuario en especifico a un publicacion en especifica,
                        este comentario es simulado porque no tenemos una base de datos de comentarios 
                        anidando el id de la publicacion con el id del usuario
                        </p>
                        <p class="card-text"><small class="text-muted">User 1</small></p><br>
                        <p class="card-text">
                        Este es otro comentario de otro usuario en especifico a esta misma publicacion,
                        este comentario es simulado porque no tenemos una base de datos de comentarios 
                        anidando el id de la publicacion con el id del usuario
                        </p>
                        <p class="card-text"><small class="text-muted">User 2</small></p><br>
                    </div>
                    <a href="{{ action('PostController@index') }}" class="card_link">Todas las publicaciones</a>

                </div>
            </div>
        </div> 
    </div>
</div>
@endsection