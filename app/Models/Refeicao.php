<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refeicao extends Model
{
    protected $table = 'refeicoes';

    use HasFactory;

    protected $fillable = [
        'data',
        'tipo',
        'periodo',
        'user_id',
    ];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function alimentos() {
        return $this->belongsToMany(Alimento::class, 'refeicao_alimento')
        ->withPivot('quantidadeConsumida') //usar a quantidade específica de cada alimento na refeição
        ->withTimestamps();
    }

    public function getTotalCaloriasAttribute()
    {
        return $this->alimentos->sum(function ($alimento) {

            $quantConsumida = $alimento->pivot->quantidadeConsumida;

            $quantReferencia = $alimento->quantidadeReferencia;

            return ($quantConsumida / $quantReferencia ) * $alimento->calReferencia;
        });
    }

    public function getTotalProteinasAttribute()
    {
        return $this->alimentos->sum(function ($alimento) {

            $quantConsumida = $alimento->pivot->quantidadeConsumida;

            $quantReferencia = $alimento->quantidadeReferencia;

            return (
                $quantConsumida / $quantReferencia
            ) * $alimento->proteinReferencia;
        });
    }

    public function getTotalCarboidratosAttribute()
    {
        return $this->alimentos->sum(function ($alimento) {

            $quantConsumida = $alimento->pivot->quantidadeConsumida;

            $quantReferencia = $alimento->quantidadeReferencia;

            return (
                $quantConsumida / $quantReferencia
            ) * $alimento->carbReferencia;
        });
    }
  
}
