<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;

    protected $fillable=["code","title","user_id"];


    public function items(){
        return $this->hasMany(unit::class,"cat_id");
    }
}
