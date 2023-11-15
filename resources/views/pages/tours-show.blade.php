@extends('app.main')
@section('title')
@if(isset($title))
{{ $title }}
@endif
@endsection
@section('main')
@include('pages.slider')
<div class="destination-details-wrapper pt-110">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="destination-details">
                    <div class="dd-thumb">
                        <img src="{{$tour->image}}" alt>
                    </div>
                    <div class="dd-body">
                        <h3 class="dd-subtitle">{{$tour->title}}</h3>
                        {!!$tour->content!!}
                        @if($tour->location)
                            <div class="destination-map">
                                <h3 class="dd-subtitle">Manzil</h3>
                                <div class="mapouter">
                                    <div class="gmap_canvas">
                                        {!!$tour->location!!}<br>
                                    </div>
                                </div>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="package-sidebar">
                    @livewire('order-tour', ['tour' => $tour])
                    <aside class="package-widget-style-2 widget-tag-cloud mt-30">
                        <div class="widget-title text-center">
                            <h4>Teglar</h4>
                        </div>
                        <div class="tag-cloud widget-body">
                            @foreach($tour->tags as $key => $tag)
                                <a href="{{route('tags',$tag->slug)}}">{{$tag->tag}}</a>
                            @endforeach
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
