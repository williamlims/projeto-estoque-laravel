<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimento extends Model
{
    use HasFactory;
    protected $fillable = ['nome_estoque', 'produto', 'tipo_transferencia', 'descricao', 'lote', 'quantidade'];
}
