<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Archivos;
use ZipArchive;

class ZipController extends Controller
{

    public function index(){
         return view('zip');
    }

    public function guardar_archivo(Request $request){


        $archivo = new Archivos();
        $archivo->nombre = $request->nombre;
        $archivo->archivo = $request->archivos->store('Archivos_pdf');

        if($archivo->save()){

            return view('zip');

           }else{

            return response()->json("hubo un error");
        }

    }
    
    public function desascargar_zip(){

        $zip = new ZipArchive;

        $fileName = 'myNewFile.zip';

        if ($zip->open(public_path($fileName), ZipArchive::CREATE) === TRUE)
        {
            $files = File::files(storage_path('app/Archivos_pdf'));
   
            foreach ($files as $key => $value) {
                $relativeNameInZipFile = basename($value);
                $zip->addFile($value, $relativeNameInZipFile);
            }
             
            $zip->close();
        }
    
        return response()->download(public_path($fileName));

    }


}
