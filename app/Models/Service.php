<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    // Define los campos que son "assignable" (asignables en masa)
    protected $fillable = [
        'name',
        'description',
        'image',
    ];

    // Si usas un nombre diferente para la tabla en la base de datos, puedes definirlo aquí
    // protected $table = 'services';
}
