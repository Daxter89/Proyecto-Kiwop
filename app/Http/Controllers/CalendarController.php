<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;

class CalendarController extends Controller
{
    public function guardarFechas(Request $request)
    {
        try {
            $selectedDates = $request->input('selectedDates');

            // Depuración: Registra las fechas recibidas
            info('Fechas recibidas:', $selectedDates);

            // Almacena las fechas en el modelo Evento
            foreach ($selectedDates as $date) {
                Evento::create([
                    'fecha_inicio' => $date,
                    'fecha_final' => $date,
                ]);
            }

            return response()->json(['message' => 'Fechas guardadas con éxito']);
        } catch (\Exception $e) {
            // Depuración: Registra cualquier error que ocurra
            error('Error al guardar fechas: ' . $e->getMessage());

            return response()->json(['error' => 'Error al guardar fechas: ' . $e->getMessage()], 500);
        }
    }
}
