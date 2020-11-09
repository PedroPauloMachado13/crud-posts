@extends('layouts.layout')

@section('content')

    @if(Auth::guard('web')->check())



    @else


    @endif


@endsection
