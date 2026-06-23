<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alimento extends Model
{
    protected $table = 'alimentos';

    use HasFactory;

    protected $guarded = [
        'nomeReferencia',
        'tipoReferencia', 
        'quantidadeReferencia',
        'medidaReferencia',   
        'calReferencia', 
        'carbReferencia', 
        'proteinReferencia',
        
    ];

    
    public function refeicoes() {
        return $this->belongsToMany(Refeicao::class, 'refeicao_alimento')
            ->withPivot('quantidadeConsumida')
            ->withTimestamps();
    }
}
