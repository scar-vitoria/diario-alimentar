<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefeicaoAlimento extends Model
{
    use HasFactory;

    protected $table = 'refeicoesalimentos';
    protected $fillable = [
        'data',
        'refeicao_id',
        'alimento_id',
        'quant',
    ];
}
