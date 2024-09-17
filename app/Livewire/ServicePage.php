<?php

namespace App\Livewire;

use Livewire\Component;

class ServicePage extends Component
{
    public function render()
    {
        return view('livewire.service-page')
            ->
            layout('components.layouts.app', ['title' => 'Service page','nav' => 'services' ]);

    }
}
