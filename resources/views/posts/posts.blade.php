@extends('layouts.layout')

@section('content')

    @if(Auth::guard('web')->check())
        @foreach($post as $p)
        <div class="container-fluid mb-3">
            <div class="card w-100">
                <div class="card-header" style="color: black; background-color: rgba(102, 102, 102, 0.315);">
                    POSTF2A#{{ $p->id }}
                </div>
                <div class="card-body" style="background-color: rgba(102, 102, 102, 0.158);">
                    <h1 class="card-title" style="color: black">{{ $p->title }}</h1>
                    <h5 class="card-text" style="color: black">{{ $p->body }}</h5>
                    <hr>

                    @if (!empty($p->list()))


                        <div class="row flex-md-row">
                            <h3 style="color: grey">Tags:</h3>
                            @foreach ($p->list() as $tag)
                                <button action="{{ route('posts.tags') }}"class="btn m-2 btn-primary rounded-lg shadow">{{ $tag }}</button>
                            @endforeach
                        </div>

                    @else

                        <p class="card-text small">Nenhuma tag associada</p>

                    @endif
                    <hr>
                    <div class="row">
                        <form method="POST" action="{{ route('posts.delete', $p->id) }}" style="display: flex;">
                            @csrf
                                <br>
                                <div class="form-group" style="margin: 0; padding: 0%;">
                                    <button type="submit" class="btn btn-danger" style="opacity: 0.7; color: black">Deletar</button>
                                    <a href="http://localhost/example/public/posts/{{ $p->id }}/edit" class="btn btn-primary" style="opacity: 0.7; color: black">Editar</a>
                                </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        @endforeach
    @else
        <div class="bg-grey">
            <h2>Faça login para ver os posts!</h2>
        </div>
    @endif


@endsection
