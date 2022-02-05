<?php

namespace App\Http\Livewire\Admin\Items;

use App\Models\category;
use App\Models\items;
use App\Models\unit;
use Livewire\Component;

class Newitem extends Component
{

    public $category;
    public $unit;

    public $form=[
        "name"=>'',
        "barcode"=>'',
        "cat_id"=>'',
        "unit_id"=>'',
    ];

    public function submit(){
        $message=[
            "form.name.required"=>"please write name",
            "form.barcode.required"=>"please write barcode",
            "form.unit_id.required"=>"please choose unit",
            "form.cat_id.required"=>"please choose category",
        ];

        $this->validate([
            "form.name"=>"required|max:100",
            "form.barcode"=>"required|max:50",
            "form.cat_id"=>"required",
            "form.unit_id"=>"required"
        ],$message);

       

        items::create($this->form);
        
        $this->form=[
            "name"=>'',
            "barcode"=>'',
            "cat_id"=>'',
            "unit_id"=>'',
        ];
        $this->emit('newUp');

        session()->flash("new","new");

        
    }


    public function render()
    {
        $this->category=category::all();
        $this->unit=unit::all();
        return view('livewire.admin.items.newitem')->extends("layouts.app")->section("content");
    }
}
