<header>
    <div class="header-area header-style-one">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-12 col-md-12 col-sm-12 col-xs-12 align-items-center d-xl-flex d-lg-block">
                    <div class="nav-logo d-flex justify-content-between align-items-center">
                        <a href="{{route('home')}}"><img width="150px" src="/{{get_set('logo')}}" alt="logo"></a>
                        <div class="d-flex align-items-center gap-4">
                            <div class="mobile-menu d-flex ">
                                <a href="javascript:void(0)" class="hamburger d-block d-xl-none">
                                    <span class="h-top"></span>
                                    <span class="h-middle"></span>
                                    <span class="h-bottom"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-6 col-xs-6">
                    <nav class="main-nav float-end">
                        <div class="inner-logo d-xl-none text-center">
                            <a href="{{route('home')}}"><img width="150px" src="{{get_set('logo')}}" alt></a>
                        </div>
                        <ul>
                            <li>
                                <a href="{{route('home')}}">Bosh Sahifa</a>
                            </li>
                            <li>
                                <a href="{{route('tours')}}">Tur Paketlar</a>
                            </li>
                            <li>
                                <a href="{{route('gallery')}}">Galereya</a>
                            </li>
                            <li><a href="{{route('contact')}}">Aloqa</a></li>
                            <li><a href="#google_translate_element"><img width="35px" src="https://cdn-icons-png.flaticon.com/512/484/484633.png"></a></li>

                        </ul>
                        <div class="inner-contact-options d-xl-none">
                            <div class="contact-box-inner"><i class="bi bi-telephone-fill"></i> <a
                                    href="tel:{{get_set('phone')}}">{{get_set('phone')}}</a></div>
                            <div class="contact-box-inner"><i class="bi bi-envelope-fill"></i>
                                <a href="mail: {{get_set('email')}}"><span
                                        class="__cf_email__"
                                       >{{get_set('email')}}</span></a>
                            </div>
                        </div>
                    </nav>
                </div>

            </div>
        </div>
    </div>
</header>
