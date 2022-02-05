<?php

namespace App\Http\Livewire\Admin\Items;

use App\Models\category;
use App\Models\items;
use App\Models\unit;
use Livewire\Component;

class Updateitem extends Component
{

    
    public $category;
    public $unit;
    public $item;
    
    public $form;

    
    public function mount($id){
        $this->item=items::findOrFail($id);
        $this->category=category::all();
        $this->unit=unit::all();
        $this->form=[
            "name"=>$this->item->name,
            "barcode"=>$this->item->barcode,
            "cat_id"=>$this->item->cat_id,
            "unit_id"=>$this->item->unit_id,
            
        ];
    }


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

       

        $this->item->update($this->form);
        
       
        $this->emit('newUp');

        session()->flash("new","new");

        
    }
    
    public function render()
    {
        return view('livewire.admin.items.updateitem')->extends("layouts.app")->section("content");;
    }

}