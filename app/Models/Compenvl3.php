<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compenvl3 extends Model
{
    use HasFactory;

    protected $fillable = [
    	'codigo', 
    	'compenvl3', 
    	'descripcion',
        'compenvl2_id',
    ];

    public function compenvl2() 
    {
        return $this->belongsTo(Compenvl2::class);
    }
}
