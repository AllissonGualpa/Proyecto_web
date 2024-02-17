<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proyectos extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nombre',
        'descripcion'
    ];
}

