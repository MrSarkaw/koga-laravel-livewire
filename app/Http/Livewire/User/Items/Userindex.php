<?php

namespace App\Http\Livewire\User\Items;

use App\Models\items;
use Livewire\Component;
use Livewire\WithPagination;

class Userindex extends Component
{
    use WithPagination;
    protected $listeners=["newUp"=>"render"];
    
    public function render()
    {
        return view('livewire.user.items.userindex',["items"=>items::latest()->paginate(25)])
        ->extends("layouts.app")->section("content");
    }
}
