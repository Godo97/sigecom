<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compersona extends Model
{
    use HasFactory;

    protected $fillable = [
        'persona_id',
        'competencia'
    ];
}
