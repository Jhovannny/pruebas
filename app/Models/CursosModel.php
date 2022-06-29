<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CursosModel extends Model
{
    use HasFactory;

    protected $table='cursos';
    protected $fiable=[
        'name',
       
        'descrition',
        'categoria',
    ];


    

}
