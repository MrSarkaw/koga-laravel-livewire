<?php

namespace App\Http\Livewire\Admin\Category;

use App\Models\category;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Addcategory extends Component
{

    public $form=[
        "code"=>'',
        "title"=>'',
        "user_id"=>'',
    ];

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
       
        
        category::create($this->form);
        
        $this->form=[
            "code"=>'',
            "title"=>'',
            "user_id"=>'',
        ];
        
        $this->emit('newUp');
        session()->flash("new","new");
        
    }


    public function render()
    {
        return view('livewire.admin.category.addcategory')->extends("layouts.app")->section("content");
    }
}
