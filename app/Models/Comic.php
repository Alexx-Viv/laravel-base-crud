<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    // Campi che devono essere considerati dalla funzione fill
    protected $fillable = ['title', 'series', 'description', 'thumb', 'price', 'sale_date', 'type'];
}
