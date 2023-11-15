<?php

namespace App\Livewire;

use App\Models\Order;
use App\Models\Tour;
use Livewire\Component;

class OrderTour extends Component
{
    public $tour;
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
        return view('livewire.order-tour',['tour'=>$this->tour]);
    }

    public function submit(){


        $this->validate();

        Order::create([
            'name' => $this->name,
            'phone' => $this->phone,
            'message' => $this->message,
            'tour_id'=>$this->tour->id,
        ]);

        $this->name = '';
        $this->phone = '';
        $this->message = '';


        session()->flash('message', 'Buyurtma Qoldirildi!');


    }
}
