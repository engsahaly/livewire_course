<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class FilesComponent extends Component
{
    use WithFileUploads;

    public $photo;

    public function rules()
    {
        return [
            'photo' => 'required|image',
        ];
    }

    // public function updatedPhoto()
    // {
    //     $this->validate();
    // }

    public function submit()
    {
        $this->validate();
        $this->photo->storeAs('local', 'Hello.jpg');
    }

    public function render()
    {
        return view('livewire.files-component');
    }
}
