<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Asignación masiva
    protected $fillable = [
        'brand_id',
        'type_id',
        'name',
        'unit',
        'image_path',
        'price',
        'sku',
        'description',
        'is_featured',
        'is_new_from_stock',
        'is_best_seller'
    ];

    // Relación uno a muchos inversa
    public function type(){
        return $this->belongsTo(Type::class);
    }

    // Relación uno a muchos inversa
    public function brand(){
        return $this->belongsTo(Brand::class);
    }
}
