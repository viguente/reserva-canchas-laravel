<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cancha extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'nombre', 'deporte', 'superficie', 'precioHora', 
        'imagen', 'imagenBanner', 'descripcion', 
        'horariosDisponibles', 'horarioAtencion', 'direccion', 'prestaciones'
    ];

    
    protected $casts = [
        'horariosDisponibles' => 'array',
        'prestaciones' => 'array',
    ];
}