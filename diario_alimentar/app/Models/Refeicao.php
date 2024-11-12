<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refeicao extends Model
{
   
    use HasFactory;

    protected $table = 'refeicoes';

     protected $fillable = [
        'data',
        'tipo_ref',
        'periodo',
        'humor',
        'desc',
        'img'
    ];

    public function alimentos()
    {
        return $this->belongsToMany(Alimento::class, 'refeicao_alimento')
                    ->withPivot('quant')
                    ->withTimestamps();
    }
}
