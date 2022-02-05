<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;

class Newuser extends Component
{
    public $form=[
        "name"=>'',
        "email"=>'',
        "password"=>'',
        "password_confirmation"=>'',
        "role"=>''
    ];

    public function submit(){
        $message=[
            "form.name.required"=>"please write full name",
            "form.email.required"=>"please write email",
            "form.password.required"=>"please write password",
            "form.password.confirmed"=>"password does not match",
        ];

        $this->validate([
            "form.name"=>"required|max:25",
            "form.email"=>"required|unique:users,email|email|max:50",
            "form.password"=>"required|confirmed|max:50",
            "form.role"=>"required"
        ],$message);

       

        User::create($this->form);
        
        $this->form=[
            "name"=>'',
            "email"=>'',
            "password"=>'',
            "password_confirmation"=>'',
            "role"=>''
        ];
        
        $this->emit('newUp');

        session()->flash("new","new");

        
    }


    public function render()
    {
        return view('livewire.admin.user.newuser')->extends("layouts.app")->section("content");
    }
}
