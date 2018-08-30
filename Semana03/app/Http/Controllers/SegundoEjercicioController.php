<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SegundoEjercicioController extends Controller
{
    function Vista()
    {
        return view('SegundoEjercicio.vista');
    }
    function EntregaDatos(Request $request)
    {

        $hab = $request->input('habitacion');
        $tie = $request->input('tiempo');


        if ($hab == 'simple') {
            if ($tie <= 5) {
                $costo = 70;
            }else{
                $costo = 50;
            }
        } else if ($hab == 'doble') {
            if ($tie < 5) {
                $costo = 80;
            }else{
                $costo = 60;
            }
        } else if ($hab == 'matrimonial') {
            if ($tie < 5) {
                $costo = 120;
            } else {
                $costo = 100;
            }
        }

        $monto = $costo * $tie;

        if ($hab == 'simple') {
            $personas = 1;
        } else if ($hab == 'doble') {
            $personas = 2;
        } else if ($hab == 'matrimonial') {
            $personas = 'Un maximo de'+4;
        }


        $datos = [
            'habit' => $hab,
            'tiempo' => $tie,
            'costoHa' => $costo,
            'monto' => $monto,
            'personas' => $personas
        ];

        return view('SegundoEjercicio.resultados', $datos);
    }
}
