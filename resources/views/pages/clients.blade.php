<div class="testimonial-area testimonial-style-one mt-120">
    <div class="testimonial-shape-group"></div>
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="section-head-alpha">
                    <h2>Bizning Mijozlarimiz Biz Haqimizda</h2>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="slider-arrows text-center d-lg-flex d-none justify-content-end mb-3">
                    <div class="testi-prev custom-swiper-prev" tabindex="0" role="button"
                        aria-label="Previous slide"> <i class="bi bi-chevron-left"></i> </div>
                    <div class="testi-next custom-swiper-next" tabindex="0" role="button" aria-label="Next slide"><i
                            class="bi bi-chevron-right"></i></div>
                </div>
            </div>
        </div>
        <div class="swiper testimonial-slider-one position-relative">
            <div class="swiper-wrapper">
                @foreach($clients as $key => $client)
                    <div class="swiper-slide">
                        <div class="testimonial-card testimonial-card-alpha">
                            <div class="testimonial-overlay-img">
                                <img src="{{ $client->image}}" alt>
                            </div>
                            <div class="testimonial-card-top">
                                <div class="qoute-icon"><i class="bx bxs-quote-left"></i></div>
                                <div class="testimonial-thumb"><img src="{{ $client->image}}" alt></div>
                                <h3 class="testimonial-count">01</h3>
                            </div>
                            <div class="testimonial-body">
                                <p>{{$client->comment}}</p>
                                <div class="testimonial-bottom">
                                    <div class="reviewer-info">
                                        <h4 class="reviewer-name">{{$client->name}}</h4>
                                        <h6>{{$client->company}}</h6>
                                    </div>
                                    <ul class="testimonial-rating">
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                        <li><i class="bi bi-star-fill"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
