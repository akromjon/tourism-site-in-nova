<?php

namespace App\Livewire;

use App\Models\Subscribe as ModelsSubscribe;
use Livewire\Component;

class Subscribe extends Component
{
    public $phone = '';

    protected $rules = [
        'phone' => 'required|min:9|max:9',
    ];
    public function render()
    {
        return view('livewire.subscribe');
    }

    public function submit(){

        $this->validate();

        ModelsSubscribe::create([
            'phone' => $this->phone,
        ]);

        session()->flash('message', 'Muvaffaqiyatli obuna bo\'ldingiz!');

        $this->reset();
    }
}
