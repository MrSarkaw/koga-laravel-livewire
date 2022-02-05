<?php

namespace App\Http\Livewire\Admin\Transaction;

use App\Models\contact;
use App\Models\items;
use App\Models\transaction;
use Livewire\Component;

class Store extends Component
{

    public $item;
    public $contact;
    public $type;

    public $form=[
        "item_id"=>'',
        "contact_id"=>'',
        "quantity"=>'',
        "price"=>'',
        "note"=>'',
        "type"=>'',
    ];

    public function submit(){
        $message=[
            "form.note.required"=>"please write name",
            "form.item_id.required"=>"please choose item",
            "form.quantity.required"=>"please write quanitity",
            "form.price.required"=>"please qrite price",
            "form.type.required"=>"please choose type",
        ];

        $this->validate([
            "form.note"=>"required|max:255",
            "form.item_id"=>"required",
            "form.quantity"=>"required|numeric",
            "form.price"=>"required|numeric",
            "form.type"=>"required",
        ],$message);

       if($this->form["contact_id"] == ''){
           $this->form["contact_id"]=null;
       }

        transaction::create($this->form);
        
        $this->form=[
            "item_id"=>'',
            "contact_id"=>'',
            "quantity"=>'',
            "price"=>'',
            "note"=>'',
            "type"=>'',
        ];
        $this->emit('newUp');

        session()->flash("new","new");

        
    }


    public function render()
    {
        $this->contact=contact::all();
        $this->item=items::all();
        $this->type=["in","out"];

        return view('livewire.admin.transaction.store')->extends("layouts.app")->section("content");
    }
}
