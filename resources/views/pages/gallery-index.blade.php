<div class="gallary-area gallary-style-one pt-110">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-head-alpha section-padding-15 text-center mx-auto">
                    <h2>Sayohat Galereyasi</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($galleries as $key => $gallery)
            <div class="col-lg-4 col-md-4">

                <div class="gallary-item">
                    <img height="250px" width="100%" src="{{$gallery->image}}" alt="{{$gallery->title}}">
                    <a class="gallary-item-overlay" data-fancybox="gallery" data-caption="{{$gallery->title}}"
                        href="{{$gallery->image}}">
                        <i class="bi bi-eye"></i>
                    </a>
                </div>


            </div>
            @endforeach
        </div>
    </div>
</div>
