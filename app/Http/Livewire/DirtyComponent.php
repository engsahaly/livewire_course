<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DirtyComponent extends Component
{
    public $email;

    public function render()
    {
        return view('livewire.dirty-component');
    }
}
