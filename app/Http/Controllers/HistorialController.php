<?php

namespace App\Http\Controllers;

use App\Models\Analisi;
use App\Models\Consulta;
use App\Models\User;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\App;
use App\Models\Cita;
use App\Models\Receta;
use App\Models\Resultado;
use Illuminate\Support\Facades\DB;
Use Dompdf\Options;

class HistorialController extends Controller
{
    //

    public function historial(Request $request, $id)
    {
        $paciente = User::findOrFail($id); 
        $citas = Cita::select('*')->where('idpaciente', $paciente->id)->get();
        $consultas = Consulta::all();
        $recetas = Receta::all();
        $analisis = Analisi::all();
        $resultados = Resultado::all();
        $cantidad = DB::table('citas')->select( DB::raw('count(*) as cantidad'))->where('idpaciente', $paciente->id)->count();
        

        $view = View::make('historial.pdfhistorial', compact('paciente','citas','consultas','resultados', 'cantidad', 'recetas', 'analisis'))->render();
        // return $view;
         $options = new Options();
         $options->set('isRemoteEnable', TRUE);
     
         $pdf = App::make('dompdf.wrapper');
         
         $pdf->setOptions([
             'logOutputFile' => storage_path('logs/log.htm'),
                 'tempDir' => storage_path('logs/')
         ]);
       
      $pdf->loadHTML($view);
     
 
         //return view('reporte.reporteComercioPrint', compact('comercio', 'fechainicio', 'fechafin', 'pedidos', 'resumen', 'resumenpagos','productos'));
     return $pdf->stream();   
 
                
            
    }
}
