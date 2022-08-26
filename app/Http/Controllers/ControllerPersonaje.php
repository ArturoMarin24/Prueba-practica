<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personaje;

class ControllerPersonaje extends Controller
{
    public function alta(Request $request)
    {
        $poke = new Personaje;

        $file = $request->file('img');
        if ($file<>"") {
        //obtenemos el nombre del archivo
        $img = $file->getClientOriginalName();
        //indicamos que queremos guardar un nuevo archivo en el disco local
        $img1 = $request->idp . $img;
        \Storage::disk('local')->put($img1,  \File::get($file));
       }
       else {
           $img1 = "sinfoto.jpg";
       }
 
        $poke ->nombre = $request->nombre;
        $poke ->tipo = $request->tipo;
        $poke ->dano = $request->dano;
        $poke ->img = $img1;
        $poke ->save();
        // dd($request);
        return redirect()->route('index');
    }

    public function reporte(Request $request)
    {
        $consulta = Personaje::select('idp','nombre','tipo','dano','img')
        ->get();
        return view('reporte')->with('consulta',$consulta);
    }
    public function mostrar(Request $request)
    {
        $con = Personaje::all()->random(1);
       return view('index')->with('con',$con);
    }
}
