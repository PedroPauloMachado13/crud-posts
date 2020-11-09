@extends('layouts.layout')

@section('content')

    @if(Auth::guard('web')->check())

        <form method="POST" action="{{ route('posts.update') }}">
            @csrf

            <h1>Editando POSTF2A#{{ $post->id }}</h1>
            <input type="hidden" class="form-control" id="id" name="id" value="{{ $post->id }}">
            <br>

            <div class="form-group">
                <label for="title">Título</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
            </div>

            <div class="form-group">
                <label for="body">Post</label>
                <textarea class="form-control" id="body" rows="3" name="body">{{ $post->body }}</textarea>
            </div>

            <br>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Enviar</button>
            </div>

        </form>

    @else

        <div class="bg-grey">
            <h2>Faça login para ver os posts!</h2>
        </div>

    @endif


@endsection
