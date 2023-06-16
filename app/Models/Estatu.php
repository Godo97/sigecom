<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estatu extends Model
{
    use HasFactory;

    protected $fillable = [
        'estatu'
    ];

    public function personas() {
        return $this->hasMany('App\Models\Persona', 'estatus_id', 'id');
    }
}
