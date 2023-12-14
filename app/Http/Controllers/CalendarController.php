<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;

class CalendarController extends Controller
{
    public function guardarFechas(Request $request)
    {
        $selectedDates = $request->input('selectedDates');

        // Almacena las fechas en el modelo Evento
        foreach ($selectedDates as $date) {
            Evento::create([
                'fecha' => $date,
                // Otros campos que puedas necesitar para tu evento
            ]);
        }

        return response()->json(['message' => 'Fechas guardadas con éxito']);
    }
}
