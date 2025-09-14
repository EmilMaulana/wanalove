<?php

namespace App\Http\Livewire;

use Livewire\Component;

class GuestNameDisplay extends Component
{
    public $name;

    public function mount()
    {
        $this->name = request()->query('to', 'Tamu Undangan');
    }

    public function render()
    {
        return view('livewire.guest-name-display');
    }
}
