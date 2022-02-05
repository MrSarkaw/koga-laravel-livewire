<?php

namespace App\Http\Livewire\Admin\Contact;

use App\Models\contact;
use Livewire\Component;

class Store extends Component
{
    public $form=[
        "name"=>'',
        "phone"=>''
    ];

    public function submit(){
        $message=[
            "form.name.required"=>"please write contact name",          
            "form.phone.required"=>"please write phone number",          
        ];

        $this->validate([
            "form.name"=>"required|max:25",
            "form.phone"=>"required|digits:11",
        ],$message);
       
        
        contact::create($this->form);
        
        $this->form=[
            "name"=>''
        ];
        
        $this->emit('newUp');
        session()->flash("new","new");
        
    }


    public function render()
    {
        return view('livewire.admin.contact.store')->extends("layouts.app")->section("content");
    }
}
