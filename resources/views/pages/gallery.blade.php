@extends('app.main')
@section('title')
    @if(isset($title))
        {{ $title }}
    @endif
@endsection
@section('main')
    @include('pages.slider')
    @include('pages.gallery-index')
@endsection