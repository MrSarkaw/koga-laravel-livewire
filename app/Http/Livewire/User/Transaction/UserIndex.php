<?php

namespace App\Http\Livewire\User\Transaction;

use App\Models\transaction;
use Livewire\Component;
use Livewire\WithPagination;

class UserIndex extends Component
{
    use WithPagination;
    protected $listeners=["newUp"=>"render"];

    public function render()
    {
        return view('livewire.user.transaction.user-index',
        ["items"=>transaction::groupBy("item_id")->selectRaw('count(*) as total,sum(quantity) as totalsum,item_id')->paginate(20)])
            ->extends("layouts.app")->section("content");
    }
}
