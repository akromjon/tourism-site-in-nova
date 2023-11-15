<?php

namespace App\Livewire;

use Livewire\Component;

class Contact extends Component
{
    public $name = '';
    public $phone = '';
    public $message = '';

    protected $rules = [
        'name' => 'required|min:3|max:255',
        'phone' => 'required|min:9|max:9',
        'message' => 'required|min:3|max:255',
    ];
    public function render()
    {
        return view('livewire.contact');
    }

    public function submit(){

        $this->validate();

        \App\Models\Contact::create([
            'name' => $this->name,
            'phone' => $this->phone,
            'message' => $this->message,
        ]);

        $this->name = '';
        $this->phone = '';
        $this->message = '';

        session()->flash('message', 'Xabar yuborildi!');
    }
}
