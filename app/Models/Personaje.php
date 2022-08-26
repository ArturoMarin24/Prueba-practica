<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personaje extends Model
{
    use HasFactory;
    protected $table = 'personaje';
    protected $primaryKey = 'idp';
    protected $fillable =['idp', 'nombre', 'img', 'tipo', 'dano'];
}
