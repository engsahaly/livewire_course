<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TestProperties extends Component
{
    public $name;
    // public $name2;
    // public $name3;

    // public function mount()
    // {
    //     $this->fill([
    //         'name' => 'Mahmoud',
    //         'name2' => 'Anwar',
    //         'name3' => 'Abdelaziz',
    //     ]);
    //     $this->reset(['name', 'name2']);
    //     $this->resetExcept('name');
    // }

    // public function search()
    // {
    //     //
    // }

    // public function getFullNameProperty()
    // {
    //     return implode(' ', $this->names);
    // }

    public function render()
    {
        return view('livewire.test-properties');
    }
}
