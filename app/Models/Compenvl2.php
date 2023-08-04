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
        return $this->belongsTo(Compenvl1::class);
    }

    public function compenvl3()
    {
        return $this->hasMany(Compenvl3::class, 'compenvl2_id', 'id');
        //return $this->belongsTo(Compenvl2::class);
    }

}
