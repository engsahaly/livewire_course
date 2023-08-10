<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TryHooks extends Component
{
    public $count = 0;

    public function mount()
    {
        dump('mount function');
    }

    public function updated()
    {
        dump('updated function');
    }

    public function increment()
    {
        $this->count++;
        dump('increment function');
    }

    public function render()
    {
        dump('render function');
        return view('livewire.try-hooks');
    }
}
