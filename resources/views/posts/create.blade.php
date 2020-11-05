@extends('layouts.layout')

@section('content')

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
    <br>
    <div class="form-group">
        <button type="submit" class="btn btn-success">Enviar</button>
    </div>
</form>
@endsection


