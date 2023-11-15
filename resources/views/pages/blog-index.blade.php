<div class="blog-area blog-style-one pt-110  ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-head-alpha text-center mx-auto">
                    <h2>Blog Postlar</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($posts as $key => $post)
                <div class="col-lg-4 col-md-6">
                    <div class="blog-card-alpha">
                        <div class="blog-thumb">
                            <a href="blog-details.html">
                                <img src="{{$post->image}}" alt>
                            </a>
                            <div class="blog-lavel">
                                <a href="index.html#"><i class="bi bi-calendar3"></i> {{$post->created_at->format('d.m.Y')}}</a>
                            </div>
                        </div>
                        <div class="blog-content">
                            <h4 class="blog-title"><a href="blog-details.html">{{$post->title}}.</a></h4>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
