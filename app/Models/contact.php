<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    use HasFactory;
    protected $fillable=["name","phone"];

    public function transactions(){
        return $this->hasMany(transaction::class,"contact_id");
    }

}
