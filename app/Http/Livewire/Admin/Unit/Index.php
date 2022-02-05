<?php

namespace App\Http\Livewire\Admin\Unit;

use App\Models\unit;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{   
    use WithPagination;
    protected $listeners=["newUp"=>"render"];

    public function render()
    {
        return view('livewire.admin.unit.index',
                    [
                            "items"=>unit::latest()->paginate(10)
                    ]
                )->extends("layouts.app")->section("content");
    }
}
