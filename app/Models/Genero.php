<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    use HasFactory;

    protected $fillable = [
        'genero'
    ];

    public function personas() {
        return $this->hasMany('App\Models\Persona', 'genero_id', 'id');
    }
}
