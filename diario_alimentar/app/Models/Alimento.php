<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alimento extends Model
{
    use HasFactory;

    protected $table = 'alimentos';

    protected $fillable = [
        'nome',
        'tipo',
        'quant',
        'cal',
        'carb',
        'protein',
        
    ];

    public function refeicoes()
    {
        return $this->belongsToMany(Refeicao::class, 'refeicao_alimento')
                    ->withPivot('quantidade')
                    ->withTimestamps();
    }
}
