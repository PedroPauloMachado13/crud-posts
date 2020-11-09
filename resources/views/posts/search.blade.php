@extends('layouts.layout')

@section('content')

    @if(Auth::guard('web')->check())

        <form method="POST" action="{{ route('posts.get') }}">
            @csrf

            <div class="form-group">
                <label for="title">Faça uma busca pelo titulo do post:</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Star Wars: Uma Aventura no Espaço">

                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('title') }}</strong> <!-- tb pode ser: {{ $message }} -->
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


