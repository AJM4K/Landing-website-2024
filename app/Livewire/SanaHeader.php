<?php

namespace App\Livewire;

use Livewire\Component;

class SanaHeader extends Component
{
    public $selectedNav ;
    public function render()
    {
        return view('livewire.sana-header');
    }
}
