<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ServiciosController extends Controller
{
    public function index(){
        $listarRamas = DB::Select('Select id_rama, descripcion from rama_examen');

        return view('servicios.index')->with('listarRamas', $listarRamas);
    }

    public function listarRamas(){
        $listarRamas = DB::Select('Select id_rama, descripcion from rama_examen');

        //return response()->json($listarRamas,200); 
        return view('servicios.formulario')->with('listarRamas', $listarRamas);
    }

    public function guardarServicios(Request $request){
        //Capturar Datos
        $id_rama=$request->selectRama;
        $nombre_servicio=$request->nombre_servicio;
        $prefijo_servicio=$request->prefijo_servicio;
        $precio_servicio=$request->precio_servicio;
        $descripcion=$request->descripcion;
        $borrado=$request->borrado;

        //Guardar Datos BD
        $insert=DB::insert("INSERT INTO examen(id_rama, nombre_examen, prefijo, precio, descripcion, borrado) 
                            VALUES (:id_rama, :nombre_examen, :prefijo, :precio, :descripcion, :borrado)", 
                                    ["id_rama"=>$id_rama, "nombre_examen"=>$nombre_servicio, "prefijo"=>$prefijo_servicio, "precio"=>$precio_servicio, "descripcion"=>$nombre_servicio, "borrado"=>$borrado]);

        // return $request->all();
        Session()->flash('examen','El examen ha sido guardado correctamente');
        return redirect()->route('servicios');
    }
}
