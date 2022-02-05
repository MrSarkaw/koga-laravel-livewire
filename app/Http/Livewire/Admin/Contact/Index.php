<?php

namespace App\Http\Livewire\Admin\Contact;

use App\Models\contact;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    protected $listeners=["newUp"=>"render"];
    use WithPagination;
    public function render()
    {
        return view('livewire.admin.contact.index',["items"=>contact::latest()->paginate(25)])->extends("layouts.app")->section("content");
    }
}
