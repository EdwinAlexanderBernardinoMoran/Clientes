<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = ['nombres', 'apellidos', 'email', 'fecha_nacimiento', 'departamento', 'municipio', 'direccion', 'dui', 'telefono', 'sexo'];
}
