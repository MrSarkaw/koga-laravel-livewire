<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;

class Updateuser extends Component
{
    public $user;
    public $form=[];

    public function mount($id){
        $this->user=User::findOrFail($id);

        $this->form=[
            "name"=>$this->user->name,
            "email"=>$this->user->email,
            "password"=>'',
            "password_confirmation"=>'',
            "role"=>$this->user->role
        ];
    }

    public function update(){
        $message=[
            "form.name.required"=>"please write full name",
            "form.email.required"=>"please write email",
            "form.password.required"=>"please write password",
            "form.location.required"=>"please write your location",
            "form.tell_number.required"=>"please write your phone number",
            "form.password.confirmed"=>"password does not match",
        ];

        $this->validate([
            "form.name"=>"required|max:25",
            "form.email"=>"required|max:50|email|unique:users,email,".$this->user->id,
            "form.password"=>"nullable|confirmed|max:50",
            "form.role"=>"required"
        ],$message);

       
        if($this->form['password']==''){
            $this->user->update([
                "name"=>$this->form['name'],
                "email"=>$this->form['email'],
                "role"=>$this->form['role']
            ]);
        }else{
            $this->user->update($this->form);
        }


        session()->flash("update","update");
      
        
       
        
        $this->emit('newUp');
      

    }

    public function render()
    {
        return view('livewire.admin.user.updateuser')->extends("layouts.app")->section("content");;
    }
}
