<div class="hero-area hero-style-three">
    <img src="assets/images/banner/banner-plane.svg" class="img-fluid banner-plane">
    <div class="hero-main-wrapper position-relative">
        <div class="swiper hero-slider-three ">

                <div class="swiper-wrapper">
                    @foreach($sliders as $key => $slide)
                    <div class="swiper-slide">
                        <div class="slider-bg-1" style="background-image: url('{{$slide->image}}')">
                            <div class="container">
                                <div class="row d-flex justify-content-center align-items-center">
                                    <div class="col-lg-8">
                                        <div class="hero3-content">
                                            <h1>{{$slide->title}}</h1>
                                            <a href="{{$slide->url}}" class="button-fill-primary banner3-btn">Hoziroq Bron Qiling</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

        </div>
        <div class="slider-arrows text-center d-lg-flex flex-column d-none gap-5">
            <div class="hero-prev3" tabindex="0" role="button" aria-label="Previous slide"> <i
                    class="bi bi-arrow-left"></i></div>
            <div class="hero-next3" tabindex="0" role="button" aria-label="Next slide"><i class="bi bi-arrow-right"></i>
            </div>
        </div>
    </div>
</div>
