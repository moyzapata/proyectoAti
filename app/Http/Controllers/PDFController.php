<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Cliente;
use App\Models\Servicio;
use Illuminate\Support\Facades\DB;

class PDFController extends Controller
{
    public function PDF(){
        $pdf = \PDF::loadView('layouts.pdf');
        return $pdf->stream('prueba.pdf');
    }

    public function PDFclientes(Request $request){
        $id = $request->id;
        $clientes = Cliente::find($id);
        $pdf = PDF::loadView('layouts.pdf', compact('clientes'));
        return $pdf->stream('clientes.pdf');
    }
    public function PDFservicios(Request $request){
        $id = $request->id;
        $servicios = Servicio::find($id);
        $pdf = PDF::loadView('layouts.pdfser', compact('servicios'));
        return $pdf->stream('servicios.pdf');
    }
}
