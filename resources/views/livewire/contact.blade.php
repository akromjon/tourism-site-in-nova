<div>
    <form wire:submit.prevent="submit" id="contact_form">
        <div class="contact-form-wrap">
            <h4>Aloqa</h4>
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            <div class="row">
                <div class="col-lg-6">
                    <div class="custom-input-group">
                        <label for="name">Ismingiz</label>
                        <input wire:model="name" type="text" placeholder="Ismingiz">
                    </div>
                    @error('name')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-lg-6">
                    <div class="custom-input-group">
                        <label for="phone">Telefon Raqamingiz</label>
                        <input wire:model="phone" type="tel" placeholder="Telefon Raqamingiz">
                    </div>
                    @error('phone')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="custom-input-group">
                <textarea wire:model="message" cols="20" rows="7" placeholder="Xabar..."></textarea>
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
