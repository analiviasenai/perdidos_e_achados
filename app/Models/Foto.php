<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    use HasFactory;

    $table = 'fotos_achadoseperdidos';

    protected $fillable = ['nome', 'caminho'];
}
