<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{

    public $form=[
        "email"=>"",
        "password"=>"",
    ];

    public function mount(){
        if(Auth::check()){
             if(Auth::user()->IsAdmin()){
                   return redirect(route("admin.user"));
                 }

                return redirect(route("user.transaction"));

        }
    }
    public function login(){
        $message=[
            "form.email.required"=>"تكایە ئیمەیل پڕكەرەوە",
            "form.email.email"=>"پێویستە ئیمەیل بێت",
            "form.password.required"=>"تكایە پاسۆرد پڕبكەرەوە",
            "form.password.min"=>"پێویستە پاسۆرد لە 6 پیت كەمترنەبێ",
        ];
        $this->validate([
            "form.email"=>"required|email",
            "form.password"=>"required|min:6"
        ],$message);

       
        if(Auth::attempt($this->form)){
                
            if(Auth::user()->IsAdmin()){
                return redirect(route("admin.user"));
              }
             return redirect(route("user.transaction"));
            
        }else{
            session()->flash('invalid', 'email or password are wrong.');
        }
      
    }

    public function render()
    {
        return view('livewire.login')->extends("layouts.app")->section("login");
    }
}
