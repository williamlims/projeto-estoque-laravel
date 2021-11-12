<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $fillable = ['codigo', 'produto', 'id_estoque', 'descricao', 'lote', 'preco', 'custo', 'quantidade', 'status'];
}
