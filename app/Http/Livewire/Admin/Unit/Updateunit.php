<?php

namespace App\Http\Livewire\Admin\Unit;

use App\Models\unit;
use Livewire\Component;

class Updateunit extends Component
{

    public $form=[];
    public $unit;

    public function mount($id){
        $this->unit=unit::findOrFail($id);
        $this->form=[
            "name"=>$this->unit->name,
        ];
    }

    
    public function submit(){
        $message=[
            "form.name.required"=>"please write full code",          
        ];

        $this->validate([
            "form.name"=>"required|max:25",
        ],$message);
       
        
        $this->unit->update($this->form);
    
        
        $this->emit('newUp');
        session()->flash("new","new");
        
    }

    
    public function render()
    {
        return view('livewire.admin.unit.updateunit')->extends("layouts.app")->section("content");
    }
}
