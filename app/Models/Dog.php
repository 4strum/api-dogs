<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    protected $table = 'dog'; 
     protected $fillable = [
        'name',
        'raca',    
    ];

    protected $timestamp = 'false';

}
