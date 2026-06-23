<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $table = 'perfis';

    use HasFactory;

    protected $fillable = [
        'user_id',
        'peso',
        'altura',
        'nasc',
        'genero',
        'objetivo',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

