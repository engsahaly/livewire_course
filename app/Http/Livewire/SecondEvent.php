<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SecondEvent extends Component
{
    // protected $listeners = ['fire' => 'ambulance'];

    // public function ambulance()
    // {
    //     dd('I am the ambulance listener from second event');
    // }

    public function render()
    {
        return view('livewire.second-event');
    }
}
