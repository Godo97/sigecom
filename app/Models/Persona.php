<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;


    protected $fillable = [
        'ci',
        'usuario',
        'nombre',
        'snombre',
        'apellido',
        'sapellido',
        'foto'
    ];
}
