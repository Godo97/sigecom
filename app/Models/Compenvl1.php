<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compenvl1 extends Model
{
    use HasFactory;


    protected $fillable = [
    	'codigo', 
    	'compenvl1', 
    	'descripcion'
    ];

    public function compenvl2()
    {
        return $this->hasMany('App\Models\Compenvl2', 'compenvl1_id', 'id');
    }
}
