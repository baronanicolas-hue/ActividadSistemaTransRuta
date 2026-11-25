<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pasajero extends Model
{
    use HasFactory;

    protected $table = 'pasajeros';

    protected $fillable = [
        'nombre',
        'identificacion',
        'telefono',
        'correo'
    ];

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}