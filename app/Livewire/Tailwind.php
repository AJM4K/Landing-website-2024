<?php

namespace App\Livewire;

use Livewire\Component;

class Tailwind extends Component
{
    public function render()
    {
        return view('livewire.tailwind')
            ->
            layout('components.layouts.tailwind-app', ['title' => 'Tailwind page', ]);

    }
}
