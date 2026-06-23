<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CalendarioController extends Controller
{
    public function dias()
    {
        // Data atual
        $today = Carbon::now();

        // Gerar os últimos 7 dias (domingo a sábado)
        $weekDays = collect(range(0, 6))->map(function($i) use ($today) {
            return $today->startOfWeek()->copy()->addDays($i);
        });

        return view('/welcome', ['weekDays' => $weekDays, 'today' => $today]);
    }
}