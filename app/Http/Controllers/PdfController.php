<?php

namespace App\Http\Controllers;
use PDF;
use App\Models\Comanda;
use App\Models\Detallecomanda;
use App\Models\Detalleproducto;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function generarPdf($idComanda)
    {
        $detallecomandas = Detallecomanda::select('idComanda', 'precio', 'cantidad', 'idPlato')
        ->selectRaw('SUM(cantidad * precio) as total_a_pagar')
        ->where('idComanda', $idComanda)
        ->groupBy('idComanda', 'precio', 'cantidad', 'idPlato')
        ->get();
        $total = $detallecomandas->sum('total_a_pagar');


        $detalleproductos = Detalleproducto::select('idComanda', 'precio', 'cantidad', 'idProducto')
        ->selectRaw('SUM(cantidad * precio) as total_pagar')
        ->where('idComanda', $idComanda)
        ->groupBy('idComanda', 'precio', 'cantidad', 'idProducto')
        ->get();
        $totalp = $detalleproductos->sum('total_pagar');
        $pdf = PDF::loadView('pdf.mi_vista',compact('detallecomandas', 'detalleproductos', 'totalp','total'));


        return $pdf->stream('mi_archivo.pdf');
    }
}
