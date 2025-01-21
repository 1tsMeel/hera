<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

    // Asignación masiva
    protected $fillable = [
        'description'
    ];

    // Relación muchos a muchos
    public function products(){
        return $this->belongsToMany(Product::class, 'product_feature')
                    ->withTimestamps();
    }
}
