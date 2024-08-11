<?php

namespace App\Livewire\Forms;

use Livewire\Form;

class LoginForm extends Form
{
    public $email;
    public $password;
    public $remember = false;

    public function rules()
    {

    }
}
