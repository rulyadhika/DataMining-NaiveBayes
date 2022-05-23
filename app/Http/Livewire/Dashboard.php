<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Dashboard extends Component
{
    public $title;

    public function mount(){
        $this->title = 'Dashboard';
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
