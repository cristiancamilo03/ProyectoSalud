<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class plantillaPDF extends Controller
{
    public function pdf(){

        $pdf = app('Fpdf');
        $pdf->AddPage('L' , 'A4');
        $pdf->SetFont('Arial', '',16);
        return response($pdf->Output() , 200, [ 'Content-type' => 'application/pdf']);
    }
}
