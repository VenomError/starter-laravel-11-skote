<?php

namespace App\Livewire\Dashboard\User;

use Livewire\Attributes\Lazy;
use Livewire\Component;

#[Lazy()]
class Index extends Component
{
    public function render()
    {
        return view('livewire.dashboard.user.index');
    }

    public function submit()
    {
        sweetalert()->success('ssss');
    }
}
