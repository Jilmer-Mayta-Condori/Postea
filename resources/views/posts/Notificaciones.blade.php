@extends('layouts.app')

@section('content')
    <div class="container">
    <p style="display: none">{{$num = 1}}</p>
    @forelse (Auth::user()->Notifications as $notificacion)
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-titl">Notificacion {{$num}} </h3>
                        <p class="card-text">{{ $notificacion->data["mensaje"]}}</p>
                        <a href="{{action('PostController@show', $notificacion->data['id_post'])}}" href="{{$notificacion->markAsRead()}}" class="card-link">{{ $notificacion->data["title_post"]}}</a>
                    </div>
                </div>
            </div>
        </div>
        <p style="display: none">{{$num = $num+1}}</p>
    @empty
        <p>No tienes ninguna notificacion</p>
    @endforelse
        
    </div>
@endsection