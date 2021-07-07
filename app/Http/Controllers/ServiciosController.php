<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Yajra\DataTables\DataTables;

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
        $insert=DB::insert("INSERT INTO examen(id_rama, nombre_examen, prefijo, precio, descripcion, borrado, created_at) 
                            VALUES (:id_rama, :nombre_examen, :prefijo, :precio, :descripcion, :borrado, now())", 
                                    ["id_rama"=>$id_rama, "nombre_examen"=>$nombre_servicio, "prefijo"=>$prefijo_servicio, "precio"=>$precio_servicio, "descripcion"=>$nombre_servicio, "borrado"=>$borrado]);

        // return $request->all();
        Session()->flash('examen','El examen ha sido guardado correctamente');
        return redirect()->route('servicios');
    }

    public function getServicesData(){
        $services=DB::SELECT('SELECT e.id_examen,re.descripcion as seccion, e.prefijo, e.nombre_examen, e.precio, e.created_at  FROM examen e
                                    LEFT JOIN rama_examen re ON e.id_rama=re.id_rama ');

        return DataTables::of($services)
       
        ->addColumn('action', 'servicios.action')
        ->rawColumns(['action'])
        ->make();
    }

    public function show(Request $request){
        $id_examen=$request->id_examen;

        $infoExamen=DB::Select('SELECT e.id_examen,re.descripcion as seccion, e.prefijo, e.nombre_examen, e.precio, e.created_at  FROM examen e
                    LEFT JOIN rama_examen re ON e.id_rama=re.id_rama
                    WHERE e.id_examen=:id_examen', ['id_examen'=>$id_examen]);
        
        //return response()->json($infoExamen,200);
        return view('servicios.show', ['nombre_examen'=>$infoExamen[0]->nombre_examen]); 
    }

    public function eliminarServicios(Request $request){

        $id_examen=$request->id_examen;
        
        $delete=DB::DELETE('DELETE FROM examen WHERE id_examen=:id_examen', ['id_examen'=>$id_examen]);
        
        Session()->flash('eliminar', 'El examen ha sido eliminado correctamente');
        return redirect()->route('servicios');

    }
}
