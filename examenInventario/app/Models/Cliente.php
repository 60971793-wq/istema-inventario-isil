<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    // Indicamos la tabla correspondiente en la base de datos
    protected $table = 'clientes';

    // Definimos los campos que se pueden llenar
    protected $fillable = ['nombre', 'email'];

    // Relación: Un cliente puede tener muchas ventas (hasMany)
    public function ventas()
    {
        return $this->hasMany(Venta::class, 'cliente_id');
    }
}