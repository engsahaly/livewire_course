<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ValidationComponent extends Component
{
    public $email;
    public $password;
    public $remember;

    // protected $rules = [
    //     'email' => 'required|email',
    //     'password' => 'required|min:5',
    //     'remember' => 'nullable',
    // ];

    public function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required|min:5',
            'remember' => 'nullable',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'My Custom email message',
        ];
    }

    public function attributes()
    {
        return [
            'password' => 'My Password Attribute',
        ];
    }

    // public function updated()
    // {
    //     $this->validateOnly('password');
    // }

    public function submit()
    {
        $this->validate($this->rules(), $this->messages(), $this->attributes());
        $this->addError('custom_error', 'This is the custom error');
        $this->resetErrorBag();
        $this->getErrorBag();
    }

    public function render()
    {
        return view('livewire.validation-component');
    }
}
