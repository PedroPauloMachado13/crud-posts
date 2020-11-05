@extends('layouts.layout')

@section('content')

    @foreach($post as $p)
        <div class="card w-100">
            <div class="card-header" style="color: black; background-color: rgba(102, 102, 102, 0.315);">
                POSTF2A#{{ $p->id }}
            </div>
            <div class="card-body" style="background-color: rgba(102, 102, 102, 0.158);">
                <h5 class="card-title" style="color: black">Titulo: {{ $p->title }}</h5>
                <p class="card-text" style="color: black">Conteúdo: {{ $p->body }}</p>

                <a href="http://localhost/example/public/posts/{{ $p->id }}/edit" class="btn btn-primary" style="opacity: 0.7; color: black">Editar</a>
                <form method="POST" action="{{ route('posts.delete', $p->id) }}">
                    @csrf
                        <br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-danger" style="opacity: 0.7; color: black">Deletar</button>
                        </div>
                </form>
            </div>
        </div>
        <br>
    @endforeach


@endsection
