<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\lectorModel;
use App\config\filesystems;

class lectorImagenesController extends Controller
{
    public function index()
    {
        //Mostrar la variable flash "mensaje_exito" si exixte
        echo session('mensaje_exito');//Session sirve para tener accesos a cualquier variable
        return view('leerImagenes.subirImagen')->with('lectorImagenes' , lectorModel::paginate(10));
    }
    public function store(Request $request)
    {
        //2. Crear el nuevo recurso
        $nuevaImagen = new lectorModel();

        if($request->hasFile('imagenHistorial')){
            $file = $request->file('imagenHistorial');
            $destinationPath = 'images/lector/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $uploadSuccess = $request->file('imagenHistorial')->move($destinationPath, $filename);
            $nuevaImagen->imagen= $destinationPath . $filename;
        }
       
        $nuevaImagen->save();
        return redirect("Lector")->with('mensaje_exito' , "Imagen Leida");
    }
}