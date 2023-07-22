<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FullComp extends Component
{
    public function render()
    {
        return view('livewire.full-comp')->layout('layouts.default', ['title' => 'Mahmoud Anwar ss']);
    }
}
