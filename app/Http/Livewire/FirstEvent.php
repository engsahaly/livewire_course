<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FirstEvent extends Component
{
    public function startEvent()
    {
        // $this->emit('fire');
        $this->dispatchBrowserEvent('fire');
    }

    public function render()
    {
        return view('livewire.first-event');
    }
}
