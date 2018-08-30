<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class claseEjercicioController extends Controller
{
    function ejercicio1(){
        return view('clase.ejercicio');
    }
    function procesar1(Request $request){
        $edad = $request -> input('edad');
        $radio = $request -> input('estudiante');
        if($edad < 12 || $radio == 'S'){
            $precio = 3;
        }else{
            $precio = 10;
        }
        $condicion = ($radio == 'S') ? 'Si' : 'No';
        $datos = [
            'val_edad' => $edad,
            'val_condicion' =>$condicion,
            'val_precio' =>$precio
        ];
        return view('clase.proceso',$datos);
    }
}
