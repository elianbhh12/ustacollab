<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class Usuarios extends Component
{

    public $users;

    public function render()
    {
        $this->  users = User:: all();
        return view('livewire.usuarios');
    }
}
