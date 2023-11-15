@extends('app.main')
@section('title')
    @if(isset($title))
        {{ $title }}
    @endif
@endsection
@section('main')
    @include('pages.slider')
    @include('pages.tours-index')
    @include('pages.gallery-index')
    @include('pages.clients')
    @include('pages.subscribe')
    @include('pages.contact-index')
@endsection
