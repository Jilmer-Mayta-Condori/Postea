@extends('layouts.app')

@section('content')

<div class="container">
    @if (Auth::check())
    <a href="{{ url('posts/myPosts') }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Mis publicaciones</a>
    <a href="{{ url('MyAccount')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Mi Cuenta</a>
    <p></p>
    @else            
    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
            <h1 class="display-4">Bienvenvido a mi aplicativo</h1>
            <h1 class="display-4">Eres mi invitado !</h1>
        </div>
    </div> 
    @endif
    @forelse($publicaciones as $publicacion)
        <div class="row mb-4 justify-content-md-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="{{ action('PostController@show', $publicacion->id)}}">{{ $publicacion->title}}</a>
                        </h5>
                    </div>
                    <img src="{{asset('storage/' . $publicacion->image)}}" class="card-img-top" alt="...">
                    @if(Auth::id() === $publicacion->user_id)
                        <a href="{{ action('PostController@destroy', $publicacion->id)}}" class="card-link">Eliminar publicacion</a>
                    @endif
                </div>
            </div>
        </div>
    @empty
        @if (Auth::check())
            <p>No tienes ninguna publicacion, crea la primera</p>
        @endif
    @endforelse
    {{ $publicaciones->links() }}
</div>
@endsection
    