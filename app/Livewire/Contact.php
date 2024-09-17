<?php

namespace App\Livewire;

use App\Models\contactMessages;
use Livewire\Component;

class Contact extends Component


{
    public $title = '';
    public $email = '';
    public $phone = '';
    public $message = '';

    public $isSubmitted = false;

       protected $rules = [
           'title' => 'required|max:200|min:1',
           'email' => 'required|email|max:28|min:3',
//           'phone' => 'required_without:email|regex:/^[0-9]{14}$/',
//           'phone' => [
//               'required_without:email',
//               'regex:/^(\+964|00964|0|*)?7[0-9]{9}$/'
//           ],
//           'phone' => 'required_without:email|numeric|digits_between:7,15|max:28',
           'phone' => [
               'required',
               'numeric',

           ],
           'message' => 'required|max:1000|min:3',
    ];




    public function SubmitMessage(){
        $this->validate();
        $item = new ContactMessages();
        $item->title = $this->title;
        $item->email = $this->email;
        $item->phone = $this->phone;
        $item->description = $this->message;
        $item->save();
        $this->isSubmitted = true;



    }
    public function render()
    {
        return view('livewire.contact')
            ->layout('components.layouts.app', ['title' => 'Contact page', 'nav' => 'contact']);

    }
}
