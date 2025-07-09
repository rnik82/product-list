<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [ // Поля, доступные для массового заполнения
        'article',
        'name',
        'status',
        'data',
    ];
}
