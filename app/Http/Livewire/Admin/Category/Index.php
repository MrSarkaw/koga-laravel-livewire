<?php

namespace App\Http\Livewire\Admin\Category;

use App\Models\category;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $listeners=["newUp"=>"render"];
    public function render()
    {
        return view('livewire.admin.category.index',
            ["items"=>category::latest()->paginate(25)]    
        )->extends("layouts.app")->section("content");
    }
}
