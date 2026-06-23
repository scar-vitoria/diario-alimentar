<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agua extends Model
{
    protected $table = 'aguas';

    use HasFactory;

    protected $fillable = [
        'data',
        'hora',
        'quant', 
        'user_id_agua', 
    ];

    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}