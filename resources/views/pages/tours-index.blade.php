<div class="package-area package-style-one pt-110 ">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="section-head-alpha">
                    <h2>Tur Paketlar</h2>
                </div>
            </div>
        </div>
        <div class="row g-4">
            @foreach($tours as $key => $tour)
                <div class="col-lg-4 col-md-6">
                    <div class="package-card-alpha">
                        <div class="package-thumb">
                            <a href="{{route('tours.show',$tour->slug)}}"><img height="250px" width="100%" src="{{$tour->image}}" alt></a>
                            <p class="card-lavel">
                                <i class="bi bi-clock"></i> <span>{{$tour->duration}} kecha</span>
                            </p>
                        </div>
                        <div class="package-card-body">
                            <h3 class="p-card-title"><a href="{{route('tours.show',$tour->slug)}}">{{$tour->title}}</a></h3>
                            <div class="p-card-bottom">
                                <div class="book-btn">
                                    <a href="{{route('tours.show',$tour->slug)}}">Bron Qilish <i class="bx bxs-right-arrow-alt"></i></a>
                                </div>
                                <div class="p-card-info">
                                    <span>Dan</span>
                                    <h6>{{$tour->fprice}} <span></span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
</div>
