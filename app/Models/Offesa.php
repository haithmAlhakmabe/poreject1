<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offesa extends Model
{
    protected $table = 'car';
    protected $filable = ['name , price , photo', 'created_at' , 'update_at'];
    protected $hidden = ['created_at' , 'update_at'];
}
