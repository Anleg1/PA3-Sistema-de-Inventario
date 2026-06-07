<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
  use HasFactory;

    protected $table = 'categorias';

    protected $fillable = [
        'nombre',
        'descripcion'
    ];
}
