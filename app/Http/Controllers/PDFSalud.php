<?php

namespace App\Http\Controllers;
use App\historialModel;
use Crabbly\Fpdf\Fpdf;
use Illuminate\Http\Request;

class PDFSalud extends Controller
{
    public function pdf($idHistorial){

        $historiales = historialModel::find($idHistorial);
        $pdf = app('Fpdf');
        //1. Añadir paginas al documento
        $pdf->AddPage('P' , 'A5');
        foreach($historiales as $historial){
        $pdf->SetFont('Arial','B',16);
        //3. Imprimir contenido en el pdf
        $pdf->SetXY(30, 05);
        $pdf->Cell(50,10, 'Historial de paciente:');
         $pdf->SetXY(40, 05);
        $pdf->SetXY(05, 25);
        $pdf->Cell(50,10,  'Nombre paciente:');
        $pdf->SetXY(05, 35);
        $pdf->Cell(50,10, $historial->NombrePaciente );
        $pdf->Cell(50,10,  'Apellido paciente:');
        $pdf->SetXY(05, 45);
        $pdf->Cell(50,10,  'Telefono paciente: ');
        $pdf->SetXY(05, 55);
        $pdf->Cell(50,10,  'Descripcion del historial: ');
        $pdf->SetXY(70, 170);
        $pdf->Cell(50,10,  'Firma:');
        }
        return response($pdf->Output() , 200, [ 'Content-type' => 'application/pdf']); //->Es para convertir de html a pdf
    }
}
