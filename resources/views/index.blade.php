@extends('layouts.app')

@section('content')
<div class="container">
    @if (Auth::check())
    <p class="card-text">Esta Registrado</p>
    @else            
    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
            <h1 class="display-4">Bienvenvido a mi aplicativo</h1>
            <h1 class="display-4">Eres mi invitado !</h1>
        </div>
    </div> 
    @endif
    @foreach($posts as $post)
    <div class="row mb-4 justify-content-md-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="{{ action('PostController@show', $post->id)}}">{{ $post->title}}</a>
                    </h5>
                </div>
                <img src="{{asset($post->image)}}" class="card-img-top" alt="...">
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
    