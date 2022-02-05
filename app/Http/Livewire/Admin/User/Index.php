<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{   
    use WithPagination;

    protected $listeners=["newUp"=>"render"];

    public function render()
    {   
        return view('livewire.admin.user.index',
            ["users"=>User::latest()->paginate(25)]    
        )->extends("layouts.app")->section("content");
    }
}
