<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Yajra\DataTables\DataTables;
use Carbon\Carbon;

class ServiciosController extends Controller
{
    public function index()
    {
        $listarRamas = DB::Select('Select id_rama, descripcion from rama_examen');

        return view('servicios.index')->with('listarRamas', $listarRamas);
    }

    public function listarRamas()
    {
        $listarRamas = DB::Select('Select id_rama, descripcion from rama_examen');

        //return response()->json($listarRamas,200); 
        return view('servicios.formulario')->with('listarRamas', $listarRamas);
    }

    public function guardarServicios(Request $request)
    {
        //Capturar Datos
        $id_rama = $request->selectRama;
        $nombre_servicio = $request->nombre_servicio;
        $prefijo_servicio = $request->prefijo_servicio;
        $precio_servicio = $request->precio_servicio;
        $descripcion = $request->descripcion;
        $borrado = $request->borrado;

        //Guardar Datos BD
        $insert = DB::insert(
            "INSERT INTO examen(id_rama, nombre_examen, prefijo, precio, descripcion, borrado, created_at) 
                            VALUES (:id_rama, :nombre_examen, :prefijo, :precio, :descripcion, :borrado, now())",
            ["id_rama" => $id_rama, "nombre_examen" => $nombre_servicio, "prefijo" => $prefijo_servicio, "precio" => $precio_servicio, "descripcion" => $descripcion, "borrado" => $borrado]
        );

        // return $request->all();
        Session()->flash('examen', 'El examen ha sido guardado correctamente');
        return redirect()->route('servicios');
    }

    public function getServicesData()
    {
        $services = DB::SELECT('SELECT e.id_examen,re.descripcion as seccion, e.prefijo, e.nombre_examen, e.precio, e.created_at  FROM examen e
                                    LEFT JOIN rama_examen re ON e.id_rama=re.id_rama ');

        return DataTables::of($services)
            ->editColumn('created_at', function($services){
                return Carbon::parse($services->created_at)->diffForHumans();
            })
            ->addColumn('action', 'servicios.action')
            ->rawColumns(['action'])
            ->make();
    }

    public function show(Request $request)
    {
        $id_examen = $request->id_examen;

        $infoExamen = DB::Select('SELECT e.id_examen,re.descripcion as seccion, e.prefijo, e.nombre_examen, e.precio, e.created_at  FROM examen e
                    LEFT JOIN rama_examen re ON e.id_rama=re.id_rama
                    WHERE e.id_examen=:id_examen', ['id_examen' => $id_examen]);

        //return response()->json($infoExamen,200);
        return view(
            'servicios.show',
            ['nombre_examen' => $infoExamen[0]->nombre_examen,
            'id_examen' => $infoExamen[0]->id_examen,
            'seccion' => $infoExamen[0]->seccion,
            'prefijo' => $infoExamen[0]->prefijo,
            'nombre_examen' => $infoExamen[0]->nombre_examen,
            'precio' => $infoExamen[0]->precio,
            'created_at' => $infoExamen[0]->created_at]
        );
    }

    public function eliminarServicios(Request $request){

        $id_examen=$request->id_examen;
        
        $delete=DB::DELETE('DELETE FROM examen WHERE id_examen=:id_examen', ['id_examen'=>$id_examen]);
        
        Session()->flash('eliminar', 'El examen ha sido eliminado correctamente');
        return redirect()->route('servicios');

    }

    public function editForm(Request $request){
        $id_examen = $request->id_examen;

        $listarRamas = DB::Select('Select id_rama, descripcion from rama_examen');

        $data = DB::SELECT('SELECT e.id_examen, re.id_rama, re.descripcion as seccion, e.prefijo, e.nombre_examen, e.precio, e.descripcion  FROM examen e
        LEFT JOIN rama_examen re ON e.id_rama=re.id_rama
        WHERE e.id_examen=:id_examen', ['id_examen' => $id_examen]);

        return view("servicios.updateServicio", [
            'nombre_examen' => $data[0]->nombre_examen,
            'id_rama' => $data[0]->id_rama,
            'id_examen' => $data[0]->id_examen,
            'seccion'=>$data[0]->seccion,
            'prefijo' => $data[0]->prefijo,
            'nombre_examen' => $data[0]->nombre_examen,
            'descripcion' => $data[0]->descripcion,
            'precio' => $data[0]->precio
        ])
        ->with('listarRamas', $listarRamas );
    }

    public function edit(Request $request){

        //Capturar Datos
        $id_examen=$request->id_examen;
        $id_rama = $request->selectRama;
        $nombre_examen = $request->nombre_servicio;
        $prefijo = $request->prefijo_servicio;
        $precio = $request->precio_servicio;
        $descripcion = $request->textDescripcion;
        $borrado = $request->borrado;
        $updated_at = now();

        $update=DB::UPDATE('UPDATE examen 
                            SET id_rama=:id_rama, 
                                nombre_examen=:nombre_examen, 
                                prefijo=:prefijo, 
                                precio=:precio, 
                                descripcion=:descripcion, 
                                borrado=:borrado,
                                
                                updated_at=:updated_at
                            WHERE id_examen=:id_examen',
                            ["id_rama"=>$id_rama, 
                            "nombre_examen"=>$nombre_examen, 
                            "prefijo"=>$prefijo, 
                            "precio"=>$precio, 
                            "descripcion"=>$descripcion, 
                            "borrado"=>$borrado, 
                            "updated_at"=>$updated_at,
                            "id_examen"=>$id_examen]);


        Session()->flash('actualizar', 'El examen ha sido actualizado correctamente');
        
        return redirect()->route('servicios');
       //return $request->all();
       //return $descripcion;
    }

    
}
