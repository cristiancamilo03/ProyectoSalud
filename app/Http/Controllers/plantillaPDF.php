<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\informeModel;

class plantillaPDF extends Controller
{
    public function pdf(){

        $datos = informeModel::all();

        foreach ($datos as $dato){
            $pdf = app('Fpdf');
            $pdf->AddPage('L' , 'A4');
            $pdf->SetFont('Arial', '',14);
            $pdf->SetXY(100, 05);
            $pdf->Cell(50,10, 'NOTA DE ENFERMERIA');
            $pdf->Image('https://lh3.googleusercontent.com/s9bK8N3NN9eRxBpFz2VZqSLG9NnOcDWSwYYQzXFRnv-KpeCzM492fKohI8uAhLwohra__w=s170',240,05,50,30,'JPEG');
            $pdf->SetFont('Arial', 'B',10);
            $pdf->SetXY(05, 15);
            $pdf->Cell(50,10, 'FECHA');
            $pdf->SetXY(25, 15);
            $pdf->Cell(50,10, '_____________________________________');
            $pdf->SetXY(25, 15);
            $pdf->Cell(50,10, $dato->fechaNac);
            $pdf->SetXY(05, 25);
            $pdf->Cell(50,10, 'NOMBRES Y APELLIDOS');
            $pdf->SetXY(50, 25);
            $pdf->Cell(50,10, '_____________________________________');
            $pdf->SetXY(50, 25);
            $pdf->Cell(50,10, $dato->nombre);
            $pdf->SetXY(05, 35);
            $pdf->Cell(50,10, 'DOCUMENTO IDENTIDAD');
            $pdf->SetXY(50, 35);
            $pdf->Cell(50,10, '_____________________________________');
            $pdf->SetXY(50, 35);
            $pdf->Cell(50,10, $dato->documento);
            $pdf->SetXY(05, 45);
            $pdf->Cell(50,10, 'DIRECCION/TELEFONO');
            $pdf->SetXY(47, 45);
            $pdf->Cell(50,10, '_____________________________________');
            $pdf->SetXY(47, 45);
            $pdf->Cell(50,10, $dato->direccion);
            $pdf->SetXY(80, 45);
            $pdf->Cell(50,10, $dato->telefono);
            $pdf->SetXY(125, 25);
            $pdf->Cell(50,10, 'EDAD');
            $pdf->SetXY(137, 25);
            $pdf->Cell(50,10, '______________');
            $pdf->SetXY(137, 25);
            $pdf->Cell(50,10, $dato->edad);
            $pdf->SetXY(125, 35);
            $pdf->Cell(50,10, 'ENTIDAD');
            $pdf->SetXY(143, 35);
            $pdf->Cell(50,10, '______________');
            $pdf->SetXY(143, 35);
            $pdf->Cell(50,10, $dato->entidad);
            $pdf->SetFont('Arial', 'B', 10);
            $pdf->SetXY(05, 60);
            $pdf->Cell(50,10, 'Cuidador Primario');
            $pdf->SetXY(40, 60);
            $pdf->Cell(50,10, $dato->cuidador);
            $pdf->SetXY(05, 68);
            $pdf->Cell(50,10, 'CONCIENCIA');
            $pdf->SetXY(40, 68);
            $pdf->Cell(50,10, $dato->conciencia);
            $pdf->SetXY(05, 76);
            $pdf->Cell(50,10, 'ESTADO DE LA PIEL');
            $pdf->SetXY(45, 76);
            $pdf->Cell(50,10, $dato->estadoPiel);
            $pdf->SetXY(05, 84);
            $pdf->Cell(50,10, 'DRENAJES');
            $pdf->SetXY(40, 84);
            $pdf->Cell(50,10, $dato->drenajes);
            $pdf->SetXY(05, 92);
            $pdf->Cell(50,10, 'VENOPUNCION');
            $pdf->SetXY(40, 92);
            $pdf->Cell(50,10, $dato->venopuncion);
            $pdf->SetXY(05, 100);
            $pdf->Cell(50,10, 'ALIMENTACION');
            $pdf->SetXY(40, 100);
            $pdf->Cell(50,10, $dato->alimentacion);
            $pdf->SetXY(05, 108);
            $pdf->Cell(50,10, 'DEPOSICION');
            $pdf->SetXY(40, 108);
            $pdf->Cell(50,10, $dato->deposicion);
            $pdf->SetXY(05, 116);
            $pdf->Cell(50,10, 'ORINA');
            $pdf->SetXY(40, 116);
            $pdf->Cell(50,10, $dato->orina);
            $pdf->SetXY(05, 124);
            $pdf->Cell(50,10, 'OXIGENO');
            $pdf->SetXY(40, 124);
            $pdf->Cell(50,10, $dato->oxigeno);
            $pdf->SetXY(05, 130);
            $pdf->Cell(50,10, 'CONTROL DE MEDICAMENTOS');
            $pdf->SetXY(05, 140);
            $pdf->SetFont('Arial', 'B', 9);
            $pdf->Cell(45,6, 'NOMBRE', 'LTRB' , 0 , 'C');
            $pdf->Cell(35,6, 'PRESENTAC', 'LTRB' , 0 , 'C');
            $pdf->Cell(35,6, 'CONCENTRACION', 'LTRB' , 0 , 'C');
            $pdf->Cell(28,6, 'DILUCION', 'LTRB' , 0 , 'C');
            $pdf->Cell(28,6, 'VIA ADMON', 'LTRB' , 0 , 'C');
            $pdf->Cell(28,6, 'FECHA', 'LTRB' , 0 , 'C');
            $pdf->Cell(28,6, 'HORA', 'LTRB' , 0 , 'C');
            $pdf->Cell(35,6, 'ENFERMERO (A)', 'LTRB' , 1 , 'C');
            $pdf->SetXY(05, 146);
            $pdf->Cell(45,6, $dato->nombre, 'LTRB' , 0, 'C');
            $pdf->Cell(35,6, $dato->presentacion, 'LTRB' , 0 , 'C');
            $pdf->Cell(35,6, $dato->concentracion ,'LTRB' , 0 , 'C');
            $pdf->Cell(28,6, $dato-> dilucion,'LTRB' , 0 , 'C');
            $pdf->Cell(28,6, $dato-> viaAdmon,'LTRB' , 0 , 'C');
            $pdf->Cell(28,6, $dato-> fecha,'LTRB' , 0 , 'C');
            $pdf->Cell(28,6, $dato-> hora,'LTRB' , 0 , 'C');
            $pdf->Cell(35,6, $dato-> enfermero,'LTRB' , 1 , 'C');
            $pdf->SetXY(05, 152);
            $pdf->Cell(262,6, 'POSOLOGIA', 'LTRB' , 0 , 'C');
            $pdf->SetXY(05, 158);
            $pdf->Cell(262,6, $dato->posologia ,'LTRB' , 0 , 'L');
            $pdf->SetFont('Arial', 'B', 10);
            $pdf->SetXY(05, 170);
            $pdf->Cell(50,10, 'VIA DE ADMINISTRACION'); 
            $pdf->SetXY(50, 170);
            $pdf->Cell(50,10, $dato->viaAdministracion); 
            $pdf->AddPage('L' , 'A4');
            $pdf->SetFont('Arial', 'B', 9);
            $pdf->SetXY(05, 10);
            $pdf->Cell(45,12, 'SIGNOS VITALES', 'LTRB' , 0 , 'C');
            $pdf->Cell(80,6, 'HORA', 'LTRB' , 0 , 'C');
            $pdf->Cell(150,6, 'ADMINISTRACION DE LIQUIDOS', 'LTRB' , 1 , 'C');
            $pdf->SetXY(50, 16);
            $pdf->Cell(16,6, '', 'LTRB' ,0 , 'C');
            $pdf->Cell(16,6, '', 'LTRB' ,0 , 'C');
            $pdf->Cell(16,6, '', 'LTRB' ,0 , 'C');
            $pdf->Cell(16,6, '', 'LTRB' ,0 , 'C');
            $pdf->Cell(16,6, '', 'LTRB' ,0 , 'C');
            $pdf->Cell(150,6, 'LIQUIDOS ADMINISTRADOS', 'LTRB' , 0 , 'C');
            $pdf->SetXY(130, 22);
            $pdf->Cell(30,6, 'Hora', 'LTRB' , 0 , 'C');
            $pdf->Cell(30,6, '', 'LTRB' , 0 , 'C');
            $pdf->Cell(30,6, '', 'LTRB' , 0 , 'C');
            $pdf->Cell(30,6, '', 'LTRB' , 0 , 'C');
            $pdf->Cell(30,6, '', 'LTRB' , 1 , 'C');
            $pdf->SetXY(130, 28);
            $pdf->Cell(30,6, 'Cant. Inicial', 'LTRB' , 0 , 'C');
            $pdf->Cell(30,6, '', 'LTRB' , 0 , 'C');
            $pdf->Cell(30,6, '', 'LTRB' , 0 , 'C');
            $pdf->Cell(30,6, '', 'LTRB' , 0 , 'C');
            $pdf->Cell(30,6, '', 'LTRB' , 1 , 'C');
            $pdf->SetXY(130, 34);
            $pdf->Cell(30,6, 'Cant. Administrada', 'LTRB' , 0 , 'C');
            $pdf->Cell(30,6, '', 'LTRB' , 0 , 'C');
            $pdf->Cell(30,6, '', 'LTRB' , 0 , 'C');
            $pdf->Cell(30,6, '', 'LTRB' , 0 , 'C');
            $pdf->Cell(30,6, '', 'LTRB' , 1 , 'C');
            $pdf->SetXY(130, 40);
            $pdf->Cell(30,6, 'Via', 'LTRB' , 0 , 'C');
            $pdf->Cell(30,6, '', 'LTRB' , 0 , 'C');
            $pdf->Cell(30,6, '', 'LTRB' , 0 , 'C');
            $pdf->Cell(30,6, '', 'LTRB' , 0 , 'C');
            $pdf->Cell(30,6, '', 'LTRB' , 1 , 'C');
            $pdf->SetXY(130, 46);
            $pdf->Cell(30,6, 'Tipo de Solucion', 'LTRB' , 0 , 'C');
            $pdf->Cell(30,6, '', 'LTRB' , 0 , 'C');
            $pdf->Cell(30,6, '', 'LTRB' , 0 , 'C');
            $pdf->Cell(30,6, '', 'LTRB' , 0 , 'C');
            $pdf->Cell(30,6, '', 'LTRB' , 1 , 'C');
            $pdf->SetXY(130, 52);
            $pdf->Cell(30,6, 'Total Liq. Admin', 'LTRB' , 0 , 'C');
            $pdf->Cell(30,6, '', 'LTRB' , 0 , 'C');
            $pdf->Cell(30,6, '', 'LTRB' , 0 , 'C');
            $pdf->Cell(30,6, '', 'LTRB' , 0 , 'C');
            $pdf->Cell(30,6, '', 'LTRB' , 1 , 'C');
            $pdf->SetXY(05, 22);
            $pdf->Cell(45,6, 'SIGNOS VITALES', 'LTRB' , 0,'C');
            $pdf->Cell(16,6, '7:00 A.M', 'LTRB' ,0 , 'C');
            $pdf->Cell(16,6, '8:00 A.M', 'LTRB' ,0 , 'C');
            $pdf->Cell(16,6, '10:00 A.M', 'LTRB' ,0 , 'C');
            $pdf->Cell(16,6, '12:00 P.M', 'LTRB' ,0 , 'C');
            $pdf->Cell(16,6, '2:00 P.M', 'LTRB' ,1 , 'C');
            $pdf->SetXY(05, 28);
            $pdf->Cell(45,6, 'Frecuencia Cardiaca', 'LTRB' , 0,'C');
            $pdf->Cell(16,6, '5:00 A.M', 'LTRB' ,0 , 'C');
            $pdf->Cell(16,6, '8:00 A.M', 'LTRB' ,0 , 'C');
            $pdf->Cell(16,6, '3:00 P.M', 'LTRB' ,0 , 'C');
            $pdf->Cell(16,6, '4:00 P.M', 'LTRB' ,0 , 'C');
            $pdf->Cell(16,6, '7:00 P.M', 'LTRB' ,1 , 'C');
            $pdf->SetXY(05, 34);
            $pdf->Cell(45,6, 'Frecuencia Respiratoria', 'LTRB' , 0,'C');
            $pdf->Cell(16,6, '5:00 A.M', 'LTRB' ,0 , 'C');
            $pdf->Cell(16,6, '8:00 A.M', 'LTRB' ,0 , 'C');
            $pdf->Cell(16,6, '3:00 P.M', 'LTRB' ,0 , 'C');
            $pdf->Cell(16,6, '4:00 P.M', 'LTRB' ,0 , 'C');
            $pdf->Cell(16,6, '7:00 P.M', 'LTRB' ,1 , 'C');
            $pdf->SetXY(05, 40);
            $pdf->Cell(45,6, 'Temperatura ', 'LTRB' , 0,'C');
            $pdf->Cell(16,6, '5:00 A.M', 'LTRB' ,0 , 'C');
            $pdf->Cell(16,6, '8:00 A.M', 'LTRB' ,0 , 'C');
            $pdf->Cell(16,6, '3:00 P.M', 'LTRB' ,0 , 'C');
            $pdf->Cell(16,6, '4:00 P.M', 'LTRB' ,0 , 'C');
            $pdf->Cell(16,6, '7:00 P.M', 'LTRB' ,1 , 'C');
            $pdf->SetXY(05, 46);
            $pdf->Cell(45,6, 'Glucometria ', 'LTRB' , 0,'C');
            $pdf->Cell(16,6, '5:00 A.M', 'LTRB' ,0 , 'C');
            $pdf->Cell(16,6, '8:00 A.M', 'LTRB' ,0 , 'C');
            $pdf->Cell(16,6, '3:00 P.M', 'LTRB' ,0 , 'C');
            $pdf->Cell(16,6, '4:00 P.M', 'LTRB' ,0 , 'C');
            $pdf->Cell(16,6, '7:00 P.M', 'LTRB' ,1 , 'C');
            $pdf->SetXY(05, 52);
            $pdf->Cell(45,6, 'Oximetria ', 'LTRB' , 0,'C');
            $pdf->Cell(16,6, '5:00 A.M', 'LTRB' ,0 , 'C');
            $pdf->Cell(16,6, '8:00 A.M', 'LTRB' ,0 , 'C');
            $pdf->Cell(16,6, '3:00 P.M', 'LTRB' ,0 , 'C');
            $pdf->Cell(16,6, '4:00 P.M', 'LTRB' ,0 , 'C');
            $pdf->Cell(16,6, '7:00 P.M', 'LTRB' ,1 , 'C');
            $pdf->SetXY(05, 65);
            $pdf->Cell(45,6, 'LIQUIDOS ELIMINADOS');
            $pdf->SetXY(05, 71);
            $pdf->Cell(35,6, 'HORA', 'LTRB' , 0,'C');
            $pdf->Cell(35,6, 'ORINA', 'LTRB' , 0,'C');
            $pdf->Cell(35,6, 'VOMITO', 'LTRB' , 0,'C');
            $pdf->Cell(35,6, 'HEMOVAC', 'LTRB' , 0,'C');
            $pdf->Cell(35,6, 'DEPOSICION', 'LTRB' , 0,'C');
            $pdf->Cell(35,6, 'SONDA', 'LTRB' , 0,'C');
            $pdf->Cell(40,6, 'TOTAL LIQ.ELIMINADOS', 'LTRB' , 0,'C');
            $pdf->SetXY(05, 77);
            $pdf->Cell(35,6, $dato->hora, 'LTRB' , 0,'C');
            $pdf->Cell(35,6, $dato->orina, 'LTRB' , 0,'C');
            $pdf->Cell(35,6, $dato->vomito, 'LTRB' , 0,'C');
            $pdf->Cell(35,6, $dato->hemovac, 'LTRB' , 0,'C');
            $pdf->Cell(35,6, $dato->deposicion, 'LTRB' , 0,'C');
            $pdf->Cell(35,6, $dato->sonda, 'LTRB' , 0,'C');
            $pdf->Cell(40,6, $dato->liquidoE, 'LTRB' , 0,'C');
            $pdf->SetXY(05, 83);
            $pdf->Cell(250,6, 'OBSERVACIONES', 'LTRB' , 0,'L');
            $pdf->SetXY(05, 89);
            $pdf->Cell(250,6, $dato->observaciones, 'LTRB' , 1,'L');
            $pdf->SetXY(05, 95);
            $pdf->Cell(290,6, 'OBSERVACIONES');
            $pdf->SetXY(05, 100);
            $pdf->Cell(290,6, '', 'LTRB' , 0,'C');
            $pdf->SetXY(05, 106);
            $pdf->Cell(290,6, '', 'LTRB' , 0,'C');
            $pdf->SetXY(05, 112);
            $pdf->Cell(290,6, '', 'LTRB' , 0,'C');
            $pdf->SetXY(05, 118);
            $pdf->Cell(290,6, '', 'LTRB' , 0,'C');
            $pdf->SetXY(05, 124);
            $pdf->Cell(290,6, '', 'LTRB' , 0,'C');
            $pdf->SetXY(05, 130);
            $pdf->Cell(290,6, '', 'LTRB' , 0,'C');
            $pdf->SetXY(05, 136);
            $pdf->Cell(290,6, '', 'LTRB' , 0,'C');
            $pdf->SetXY(05, 142);
            $pdf->Cell(290,6, '', 'LTRB' , 0,'C');
    
    
            return response($pdf->Output() , 200, [ 'Content-type' => 'application/pdf']);
        }
        
    }
}
