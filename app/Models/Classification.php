<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classification extends Model
{
    use HasFactory;

    // Relación uno a muchos
    public function types(){
        return $this->hasMany(Type::class);
    }
}
