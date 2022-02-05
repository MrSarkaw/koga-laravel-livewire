<?php

namespace App\Http\Livewire\Admin\Transaction;

use App\Models\transaction;
use Livewire\Component;
use Livewire\WithPagination;

class ShowTransaction extends Component
{

    use WithPagination;

    protected $listeners=["newUp"=>"render"];

    
    public $item_id;
    public $type;

    public $searchData=null;
    public function mount($id){
        $this->item_id=$id;
    }

    public function search(){
        
       if($this->type!='' || $this->type!=null){
            $this->searchData=transaction::where("item_id",$this->item_id)->where("type",$this->type)->get();
       }else{
           $this->searchData=null;
       }
    }

    public function render()
    {
        $transaction=transaction::where("item_id",$this->item_id)->paginate(25);
        return view('livewire.admin.transaction.show-transaction'
                    ,["items"=>$transaction]
                    )->extends("layouts.app")->section("content");
    }
}
