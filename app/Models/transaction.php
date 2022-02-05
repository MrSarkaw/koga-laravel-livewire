<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    use HasFactory;
    protected $fillable=["item_id","contact_id","quantity","price","note","type"];

    public function item(){
        return $this->belongsTo(items::class,"item_id");
    }

    public function contact(){
        return $this->belongsTo(contact::class,"contact_id");
    }

}
