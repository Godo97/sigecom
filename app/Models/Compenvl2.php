<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compenvl2 extends Model
{
    use HasFactory;

    protected $fillable = [
    	'codigo', 
    	'compenvl2', 
    	'descripcion',
        'compenvl1_id',
    ];

    public function compenvl1() 
    {
        return $this->hasOne('App\Models\Compenvl1', 'id', 'compenvl1_id');
    }

    public function compenvl3()
    {
        return $this->hasMany('App\Models\Compenvl3', 'compenvl2_id', 'id');
    }

}
