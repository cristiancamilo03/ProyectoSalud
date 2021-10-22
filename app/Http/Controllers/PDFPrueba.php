<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\informeModel;

class PDFPrueba extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($idInforme)
    {
        $pruebas = informeModel::find($idInforme);

        foreach ($pruebas as $prueba){
        }
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
            $pdf->SetXY(05, 25);
            $pdf->Cell(50,10, 'NOMBRES Y APELLIDOS');
            $pdf->SetXY(50, 25);
            $pdf->Cell(50,10, $prueba->nombre);
            $pdf->SetXY(05, 35);
            $pdf->Cell(50,10, 'DOCUMENTO IDENTIDAD');
            $pdf->SetXY(50, 35);
            $pdf->Cell(50,10, '_____________________________________');
            $pdf->SetXY(05, 45);
            $pdf->Cell(50,10, 'DIRECCION/TELEFONO');
            $pdf->SetXY(47, 45);
            $pdf->Cell(50,10, '_____________________________________');
            $pdf->SetXY(125, 25);
            $pdf->Cell(50,10, 'EDAD');
            $pdf->SetXY(137, 25);
            $pdf->Cell(50,10, '______________');
            $pdf->SetXY(125, 35);
            $pdf->Cell(50,10, 'ENTIDAD');
            $pdf->SetXY(143, 35);
            $pdf->Cell(50,10, '______________');
            $pdf->SetFont('Arial', 'B', 10);
            $pdf->SetXY(05, 60);
            $pdf->Cell(50,10, 'Cuidador Primario');
            $pdf->SetXY(05, 68);
            $pdf->Cell(50,10, 'CONCIENCIA');
            $pdf->SetXY(05, 76);
            $pdf->Cell(50,10, 'ESTADO DE LA PIEL');
            $pdf->SetXY(05, 84);
            $pdf->Cell(50,10, 'DRENAJES');
            $pdf->SetXY(05, 92);
            $pdf->Cell(50,10, 'VENOPUNCION');
            $pdf->SetXY(05, 100);
            $pdf->Cell(50,10, 'ALIMENTACION');
            $pdf->SetXY(05, 108);
            $pdf->Cell(50,10, 'DEPOSICION');
            $pdf->SetXY(05, 116);
            $pdf->Cell(50,10, 'ORINA');
            $pdf->SetXY(05, 124);
            $pdf->Cell(50,10, 'OXIGENO');
            $pdf->SetXY(05, 130);
            $pdf->Cell(50,10, 'CONTROL DE MEDICAMENTOS');
            $pdf->SetXY(05, 140);
            $pdf->SetFont('Arial', 'B', 9);
            $pdf->Cell(45,6, 'NOMBRE', 'LTRB' , 0 , 'C');
            $pdf->Cell(35,6, 'PRESENTAC', 'LTRB' , 0 , 'C');
            $pdf->Cell(35,6, 'CONCENTRACION', 'LTRB' , 0 , 'C');
            $pdf->Cell(28,6, 'POSOLOGIA', 'LTRB' , 0 , 'C');
            $pdf->Cell(28,6, 'DILUCION', 'LTRB' , 0 , 'C');
            $pdf->Cell(28,6, 'VIA ADMON', 'LTRB' , 0 , 'C');
            $pdf->Cell(28,6, 'FECHA', 'LTRB' , 0 , 'C');
            $pdf->Cell(28,6, 'HORA', 'LTRB' , 0 , 'C');
            $pdf->Cell(35,6, 'ENFERMERO (A)', 'LTRB' , 1 , 'C');
            $pdf->SetXY(05, 146);
            $pdf->Cell(45,6, '', 'LTRB' , 0, 'C');
            $pdf->Cell(35,6, '', 'LTRB' , 0 , 'C');
            $pdf->Cell(35,6, '', 'LTRB' , 0 , 'C');
            $pdf->Cell(28,6, '', 'LTRB' , 0 , 'C');
            $pdf->Cell(28,6, '', 'LTRB' , 0 , 'C');
            $pdf->Cell(28,6, '', 'LTRB' , 0 , 'C');
            $pdf->Cell(28,6, '', 'LTRB' , 0 , 'C');
            $pdf->Cell(28,6, '', 'LTRB' , 0 , 'C');
            $pdf->Cell(35,6, '', 'LTRB' , 1 , 'C');
            $pdf->SetXY(05, 152);
            $pdf->Cell(45,6, '', 'LTRB' , 0, 'C');
            $pdf->Cell(35,6, '', 'LTRB' , 0 , 'C');
            $pdf->Cell(35,6, '', 'LTRB' , 0 , 'C');
            $pdf->Cell(28,6, '', 'LTRB' , 0 , 'C');
            $pdf->Cell(28,6, '', 'LTRB' , 0 , 'C');
            $pdf->Cell(28,6, '', 'LTRB' , 0 , 'C');
            $pdf->Cell(28,6, '', 'LTRB' , 0 , 'C');
            $pdf->Cell(28,6, '', 'LTRB' , 0 , 'C');
            $pdf->Cell(35,6, '', 'LTRB' , 1 , 'C');
            $pdf->SetFont('Arial', 'B', 10);
            $pdf->SetXY(05, 160);
            $pdf->Cell(50,10, 'VIA DE ADMINISTRACION'); 
            $pdf->SetXY(05, 165);
            $pdf->Cell(50,10, 'Subcutanea');
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
            $pdf->Cell(45,6, 'HORA', 'LTRB' , 0,'C');
    
    
    
            return response($pdf->Output() , 200, [ 'Content-type' => 'application/pdf']);
       

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
