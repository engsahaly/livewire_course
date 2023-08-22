<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class FetchComponent extends Component
{
    public $name;

    public function fetch()
    {
        $data = Http::get('https://api.github.com/users/engsahaly');
        $this->name = $data['name'];
    }

    public function render()
    {
        return view('livewire.fetch-component');
    }
}
