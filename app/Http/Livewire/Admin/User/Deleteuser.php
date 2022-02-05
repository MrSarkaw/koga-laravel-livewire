<?php

namespace App\Http\Livewire\Admin\User;

use App\Models\category;
use App\Models\contact;
use App\Models\items;
use App\Models\transaction;
use App\Models\unit;
use App\Models\User;
use Livewire\Component;

class Deleteuser extends Component
{
    public $data;
    public function mount($id, $model)
    {
        if ($model == 'users') {
            $this->data = User::findOrFail($id);
        } else if ($model == "category") {
            $this->data = category::findOrFail($id);
        } else if ($model == "unit") {
            $this->data = unit::findOrFail($id);
        } else if ($model == "items") {
            $this->data = items::findOrFail($id);
        } else if ($model == "contacts") {
            $this->data = contact::findOrFail($id);
        } else if ($model == "transactions") {
            $this->data = transaction::findOrFail($id);
        }
    }

    public function deleteuser()
    {
        $this->data->delete();
        $this->emit('newUp');
    }

    public function render()
    {
        return view('livewire.admin.user.deleteuser');
    }
}
