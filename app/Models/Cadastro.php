<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cadastro extends Model
{
    use HasFactory;
    protected $table = 'usuarios'; // nome da tabela
    protected $fillable = ['nome_completo', 'email', 'celular', 'senha'];
    public $timestamps = true; // para usar created_at e updated_at
}
