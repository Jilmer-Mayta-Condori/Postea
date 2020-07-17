@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <h2>Nueva publicacion</h2>
        </div>
        <div class="row justify-content-center">
            @if (count($errors) > 0)
                <div class="row alert alert-danger">
                    <p>¡Opss! Hubo problemas con los datos proporcinados</p>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error}} </li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action=" {{action('PostController@create')}} " method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="col-sm-2 col-form-label" for="title">{{ __('Title')}}</label>
                    <div class="col-sm-12">
                        <input id="title" class="form-control{{ $errors->has('title') ?  'is-invalid' : '' }} " 
                        type="text" name="title" value="{{ old('title')}}" autofocus>
                        @if ($errors->has('title'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('title')}}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 col-form-label" for="content" >{{ __('Content')}}</label>
                    <div class="col-sm-12">
                        <textarea class="form-control{{ $errors->has('content') ? ' is-invalid' : ''}}"
                        id="content" name="content" rows="3">{{ old('content')}}</textarea>
                        @if ($errors->has('content'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('content')}}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input{{ $errors->has('image') ? 'is-invalid' : ''}}"
                            id="image" name="image">
                            <label class="custom-file-label" for="customFile">{{ __('Choose image')}}</label>
                            @if($errors->has('image'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('image')}}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary">
                           {{ __('Create')}}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection