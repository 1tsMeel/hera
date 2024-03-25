<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Relación uno a muchos inversa
    public function type(){
        return $this->belongsTo(Type::class);
    }

    // Relación uno a muchos inversa
    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    // Relación muchos a muchos
    public function features(){
        return $this->belongsToMany(Feature::class)
                    ->withTimestamps();
    }
}
