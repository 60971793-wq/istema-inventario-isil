<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    protected $table = 'ventas';

    protected $fillable = ['cliente_id', 'total'];

    // Relación inversa: Una venta pertenece a un cliente específico (belongsTo)
    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }
}