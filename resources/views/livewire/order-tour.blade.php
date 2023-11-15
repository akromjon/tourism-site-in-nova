<div>
    <aside class="package-widget-style-2 widget-form mt-30">
        <div class="widget-title text-center d-flex justify-content-between">
            <h4>Bron Qilish</h4>
            <h3 class="widget-lavel">{{$tour->fprice}}</h3>
        </div>
        <div class="widget-body">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            <form wire:submit.prevent="submit" method="post">
                <div class="booking-form-wrapper">
                    <div class="custom-input-group">
                        <input type="text" wire:model="name" placeholder="Ismingiz">
                        @error('name')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="custom-input-group">
                        <input type="tel" wire:model="phone" placeholder="Telefon Raqamingiz">
                        @error('phone')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="custom-input-group">
                        <textarea cols="20" wire:model="message" rows="7" placeholder="Xabar">{{($tour->title)}}</textarea>
                        @error('message')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="custom-input-group">
                        <div class="submite-btn">
                            <button type="submit">Yuborish</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </aside>
</div>
