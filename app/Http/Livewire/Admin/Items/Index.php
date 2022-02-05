<?php

namespace App\Http\Livewire\Admin\Items;

use App\Models\items;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{       
    use WithPagination;
    protected $listeners=["newUp"=>"render"];

    public function render()
    {
    
        return view('livewire.admin.items.index',["items"=>items::latest()->paginate(25)])
                    ->extends("layouts.app")->section("content");
    }
}
