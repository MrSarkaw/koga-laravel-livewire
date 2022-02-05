<?php

namespace App\Http\Livewire\Admin\Contact;

use App\Models\contact;
use Livewire\Component;

class Update extends Component
{

    public $form=[];
    public $contact;

    public function mount($id){
        $this->contact=contact::findOrFail($id);
        $this->form=[
            "name"=>$this->contact->name,
            "phone"=>$this->contact->phone,
        ];
    }

    
    public function submit(){
        $message=[
            "form.name.required"=>"please write contact name",          
            "form.phone.required"=>"please write phone number",          
        ];

        $this->validate([
            "form.name"=>"required|max:25",
            "form.phone"=>"required|digits:11",
        ],$message);
       
        $this->contact->update($this->form);
    
        
        $this->emit('newUp');
        session()->flash("new","new");
        
    }


    public function render()
    {
        return view('livewire.admin.contact.update')->extends("layouts.app")->section("content");;
    }
}
