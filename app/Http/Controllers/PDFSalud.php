<?php

namespace App\Http\Controllers;
use App\historialModel;
use Crabbly\Fpdf\Fpdf;
use Historial;
use Illuminate\Http\Request;

class PDFSalud extends Controller
{
    public function pdf(){

        $historiales = historialModel::all();
        $pdf = app('Fpdf');
        //1. Añadir paginas al documento
        $pdf->AddPage('P' , 'A5');
        foreach($historiales as $historial){
        $pdf->SetFont('Arial','B',16);
        //3. Imprimir contenido en el pdf
        $pdf->SetXY(30, 05);
        $pdf->Cell(50,10, 'Historial de paciente:');
        $pdf->SetFont('Arial','B',10);
        $pdf->SetXY(05, 20);
        $pdf->Cell(50,10,  'Nombre paciente:');
        $pdf->SetXY(05, 30);
        $pdf->Cell(50,10,  'Apellido paciente:');
        $pdf->SetXY(05, 40);
        $pdf->Cell(50,10,  'Telefono paciente');
        }
        return response($pdf->Output() , 200, [ 'Content-type' => 'application/pdf']); //->Es para convertir de html a pdf
    }
}
