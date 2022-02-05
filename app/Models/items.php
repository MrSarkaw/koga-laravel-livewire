<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class items extends Model
{
    use HasFactory;
    protected $fillable=["cat_id","unit_id","name","barcode"];

    public function category(){
        return $this->belongsTo(category::class,"cat_id");
    }
    public function unit(){
        return $this->belongsTo(unit::class,"unit_id");
    }

    public function transactions(){
        return $this->hasMany(transaction::class,"item_id");
    }
}
