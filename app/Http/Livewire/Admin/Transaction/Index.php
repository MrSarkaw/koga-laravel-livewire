<?php

namespace App\Http\Livewire\Admin\Transaction;

use App\Models\transaction;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    
    use WithPagination;
    protected $listeners=["newUp"=>"render"];


    public function render()
    {
        return view('livewire.admin.transaction.index',
             ["items"=>transaction::groupBy("item_id")->selectRaw('count(*) as total,sum(quantity) as totalsum,item_id')->paginate(20)]
        )->extends("layouts.app")->section("content");
    }
}
