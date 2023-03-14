<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Archivos;
use ZipArchive;

class ZipController extends Controller
{
    /**
      * Muestra el formulario para subir archivos.
     *
     * Show the form to upload files.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        return view('zip');
    }

    /**
     *  Guarda el archivo subido en la base de datos.
     *
     * Save uploaded file to database.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\JsonResponse|\Illuminate\View\View
     */
    public function guardar_archivo(Request $request){

        $archivo = new Archivos();
        $archivo->nombre = $request->nombre;
        // Almacena el archivo subido en la carpeta 'Archivos_pdf' dentro del almacenamiento.
        $archivo->archivo = $request->archivos->store('Archivos_pdf');

        if($archivo->save()){
          // Si el archivo se guarda correctamente, regresa al formulario de subida.
            return view('zip');
           }else{
          // Si hay un error, devuelve una respuesta JSON.
            return response()->json("hubo un error");
        }

    }
    
    /**
     * Crea y descarga un archivo ZIP que contiene todos los archivos dentro de la carpeta 'Archivos_pdf'.
     *
     * Create and download a ZIP file containing all the files inside 'Archivos_pdf' folder.
     *
     * @return mixed
     */
    public function desascargar_zip(){

        $zip = new ZipArchive;

        // Nombre del archivo ZIP a crear.
        $fileName = 'myNewFile.zip';

        if ($zip->open(public_path($fileName), ZipArchive::CREATE) === TRUE)
        {
            // Obtiene todos los archivos dentro de la carpeta 'Archivos_pdf'.
            $files = File::files(storage_path('app/Archivos_pdf'));
   
            // Agrega cada archivo al archivo ZIP.
            foreach ($files as $key => $value) {
                // Obtiene el nombre del archivo sin la ruta.
                $relativeNameInZipFile = basename($value);
                $zip->addFile($value, $relativeNameInZipFile);
            }
             // Cierra el archivo ZIP.
            $zip->close();
        }
        // Descarga el archivo ZIP.
        return response()->download(public_path($fileName));

    }


}
