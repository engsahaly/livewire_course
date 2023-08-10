<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ChildComponent extends Component
{
    public $childName;

    public function render()
    {
        return view('livewire.child-component');
    }
}
