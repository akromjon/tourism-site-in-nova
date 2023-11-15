<!doctype html>
<html lang="uz">

<head>
    <title>@yield('title') - {{get_set('name')}}</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('parts.head')
</head>

<body>

    <div class="preloader">
        <div class="loader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    @include('parts.top-header')

    @include('parts.header')

    @yield('main')

    <div class="footer-area mt-110">

        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-4 col-md-6 order-lg-1 order-3 ">
                        <div class="copyright-link text-lg-start text-center">
                            <p>Copyright {{now()->format('Y')}}</p>
                        </div>
                    </div>
                    <div class="col-lg-4  order-lg-2 order-1">
                        <div class="footer-logo text-center">
                            <a href="{{route('home')}}"><img width="80px" src="{{get_set('logo')}}" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 order-lg-3 order-2">
                        <div class="policy-links">
                            <div id="google_translate_element"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('parts.scripts')
</body>

</html>
