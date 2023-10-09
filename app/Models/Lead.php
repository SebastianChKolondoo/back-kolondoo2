<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;
    protected $table = "lead";
    protected $fillable = [
        'id',
        'idOferta',
        'phone',
        'landing'
    ];
}
