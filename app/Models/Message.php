<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    // Asignación masiva
    protected $fillable = [
        'name',
        'email',
        'phone',
        'msg',
    ];
}
