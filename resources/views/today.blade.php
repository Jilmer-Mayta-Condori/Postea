@extends('layouts.app')

@section('content')

<div class="container">
    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
            <h1 class="display-4">Publicaciones del dia de hoy : {{$fecha}} </h1>
        </div>
    </div>
    @forelse($posts as $post)
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
    @empty
    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
            <h1 class="display-4">El dia de hoy no se relalizo ninguna publicación </h1>
        </div>
    </div>
    @endforelse
</div>
@endsection
    