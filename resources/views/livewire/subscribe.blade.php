<div>
    <form wire:submit.prevent="submit" method="post">
        <div class="newslatter-form-input">
            <input wire:model="phone" type="text" name="phone" placeholder="Telefon Raqam...">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            <button type="submit" class="newslatter-submit">Azo Bo'lish</button>

        </div>
    </form>
    @error('phone')
        <div class="alert alert-danger" role="alert">
            {{ $message }}
        </div>
    @enderror
</div>
