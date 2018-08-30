<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimerEjercicioVistaController extends Controller
{
    function DevuelveLaVista()
    {
        return view('PrimerEjercicio.vista');
    }
    function Respuesta(Request $request)
    {
        $cantidad1 = $request->input('cantidad1');
        $cantidad2 = $request->input('cantidad2');
        $cantidad3 = $request->input('cantidad3');
        $cantidad4 = $request->input('cantidad4');
        $cantidad5 = $request->input('cantidad5');
        $monto = $request->input('monto');

        if ($cantidad1 > 90) {
            $mensC = "Ha exedido su pedido";
        }
        if ($cantidad2 > 80) {
            $mensC = "Ha exedido su pedido";
        }
        if ($cantidad3 > 86) {
            $mensC = "Ha exedido su pedido";
        }
        if ($cantidad4 > 65) {
            $mensC = "Ha exedido su pedido";
        }
        if ($cantidad5 > 45) {
            $mensC = "Ha exedido su pedido";
        }


        

        $suma = $cantidad1 +
            $cantidad2 +
            $cantidad3 +
            $cantidad4 +
            $cantidad5;

        $c1 = $cantidad1 * 3;
        $c2 = $cantidad2 * 3;
        $c3 = $cantidad3 * 1.5;
        $c4 = $cantidad4 * 1.8;
        $c5 = $cantidad5 * 2;

        $montoPagar = $c1 + $c2 + $c3 + $c4 + $c5;
        $descuento = $monto - $montoPagar;

        if($montoPagar > $monto){
            $mensaje = "Su dinero ingresado no es suficiente";
        }

        $datos = [
            'cantGas' => $suma,
            'montPagar' => $montoPagar,
            'monto' => $monto,
            'desc' => $descuento,
            'mensaje' => $mensC,
            'mensaje2' => $mensaje
        ];

        return view('PrimerEjercicio.resultados', $datos);
    }
}
