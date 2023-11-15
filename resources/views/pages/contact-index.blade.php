<div class="contact-wrapper pt-100">
    <div class="container">
        <div class="row align-items-center justify-content-lg-center gy-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-head-alpha section-padding-15 text-center mx-auto">
                        <h2>Biz Bilan Aloqa</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="contact-info">
                    <h3>Kontaktlar:</h3>
                    <ul>
                        <li>
                            <h6>Telefon Raqam, Elektron Pochta:</h6>
                            <a href="mail:{{get_set('email')}}">{{get_set('email')}}</a><br>
                            <a href="tel:{{get_set('phone')}}">{{get_set('phone')}}</a>
                        </li>
                        <li>
                            <h6>Manzil:</h6>
                            <a href="#">{{get_set('address')}}</a>
                        </li>
                        <li>
                            <h6>Ijtimoiy Tarmoqlar:</h6>
                            <a href="{{get_set('facebook')}}">Facebook</a>
                            <a href="{{get_set('instagram')}}">Instagram</a>
                            <a href="{{get_set('telegram')}}">Telegram</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-7">
                @livewire('contact')
            </div>
        </div>
    </div>

    <div class="container-fluid p-0">
        <div class="contact-map mt-120">
            <div class="mapouter">
                <div class="gmap_canvas">
                    {!!get_set('location')!!}
                </div>
            </div>
        </div>
    </div>
</div>
