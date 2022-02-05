<?php

namespace App\Http\Livewire\Admin\Unit;

use App\Models\unit;
use Livewire\Component;

class Newunit extends Component
{
    public $form=[
        "name"=>''
    ];

    public function submit(){
        $message=[
            "form.name.required"=>"please write full code",          
        ];

        $this->validate([
            "form.name"=>"required|max:25",
        ],$message);
       
        
        unit::create($this->form);
        
        $this->form=[
            "name"=>''
        ];
        
        $this->emit('newUp');
        session()->flash("new","new");
        
    }


    public function render()
    {
        return view('livewire.admin.unit.newunit')->extends("layouts.app")->section("content");
    }
}
