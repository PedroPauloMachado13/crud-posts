@extends('layouts.layout')

@section('content')

<head>
    <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
</head>

    @if(Auth::guard('web')->check())

        <form method="POST" action="{{ route('posts.store') }}">
            @csrf

            <div class="form-group">
                <label for="title">Título</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Título do seu post aqui">

                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('title') }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
            <label for="body">Post</label>
            <textarea class="form-control @error('body') is-invalid @enderror" id="body" rows="3" name="body" placeholder="Corpo do seu post aqui"></textarea>

            @error('body')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('body') }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="tag">Tags</label>
                <select id="tag" name="tag[]" class="selectpicker" multiple>
                    @foreach ($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                    @endforeach
                </select>

                @error('tag')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('tag') }}</strong>
                    </span>
                @enderror
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



