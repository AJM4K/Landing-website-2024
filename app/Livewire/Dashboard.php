<?php

namespace App\Livewire;

use Livewire\WithPagination;
use Livewire\Component;
use App\Models\ContactMessages;


class Dashboard extends Component

{
    use WithPagination;
  //  public $contactForms ;
    public $search = ''; 

    public function mount(){
    // $this->contactForms = ContactMessages::paginate(3);
    }
    public function render()
    {
       $data = ContactMessages::paginate(10);
       // $data = ContactMessages::All();

        return view('livewire.dashboard' , ['contactForms'=> $data  ])
        ->
        layout('components.layouts.app', ['title' => 'Dashboard','nav' => 'dashboard' ]);
    }

    public function delete($id)
    {
        $contactForm = ContactMessages::find($id);
        if ($contactForm) {
            $contactForm->delete();
            $this->contactForms = ContactMessages::all(); // Refresh the list
            session()->flash('message', 'Contact form deleted successfully.');
        }
    }
}
