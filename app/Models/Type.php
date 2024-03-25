<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    // Relación uno a muchos inversa
    public function classification(){
        return $this->belongsTo(Classification::class);
    }

    // Relación uno a muchos
    public function products(){
        return $this->hasMany(Product::class);
    }
}
