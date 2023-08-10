<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ParentComponent extends Component
{
    public $parentTitle = 'Hello I am the parent component';
    public $myChildren = ['ahmed', 'omar', 'yasser'];

    public function render()
    {
        return view('livewire.parent-component');
    }
}
