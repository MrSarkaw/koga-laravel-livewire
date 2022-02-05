<?php

namespace App\Http\Livewire\Admin\Category;

use App\Models\category;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Uodatecategory extends Component
{


    public $form=[];
    public $category;

    public function mount($id){
        $this->category=category::findOrFail($id);
        $this->form=[
            "code"=>$this->category->code,
            "title"=>$this->category->title,
            "user_id"=>'',
        ];
    }

    public function submit(){
        $message=[
            "form.code.required"=>"please write full code",
            "form.title.required"=>"please write title",
          
        ];

        $this->validate([
            "form.code"=>"required|max:10",
            "form.title"=>"required|max:50",
        ],$message);

        $this->form["user_id"]=Auth::id();
       
        
        $this->category->update($this->form);
        session()->flash("update","update");
        
        $this->emit('newUp');
        
    }
    
    public function render()
    {
        return view('livewire.admin.category.uodatecategory')->extends("layouts.app")->section("content");
    }
}
