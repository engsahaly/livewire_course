<?php

namespace App\Http\Livewire;

use Livewire\Component;

class InlineComp extends Component
{
    public function render()
    {
        return <<<'blade'
            <div>
                Hello from inline component
            </div>
        blade;
    }
}
