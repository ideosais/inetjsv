<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\ActivoCreateRequest;
use App\Activo;
use Session;
use Redirect;
use Illuminate\Routing\Route;

class ActivosController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('activos.index');
    }

    public function show()
    {
        return view('activos.index');
    }

    public function listar(Request $request)
    {
        $query = $request->all();

        $activos = Activo::where(function($q) use ($query){
            if($query['nombre'] != '') $q->where('nombre', 'LIKE', '%'.$query['nombre'].'%');
            if($query['delegacion'] != '')$q->where('m_delegacion_id', '=', $query['delegacion']);
            if($query['empresa'] != '')$q->where('m_empresa_id', '=', $query['empresa']);
            if($query['responsable_mtmo'] != '')$q->where('m_resp_mtmo_id', '=', $query['responsable_mtmo']);
        })->get();

        return view('activos.list',compact('activos'));
    }

    public function create()
    {
        return view('activos.create');
    }

    public function store(ActivoCreateRequest $request)
    {
        $activo = new Activo;
        $activo->nombre = $request->input('nombre');
        $activo->m_delegacion_id  = $request->input('delegacion');
        $activo->m_empresa_id  = $request->input('empresa');
        $activo->m_resp_mtmo_id  = $request->input('responsable_mtmo');

        $activo->save();

        return redirect()->route('activo.index');

        /**if($request->ajax()){

            $activo = $request->all();

            Activo::create($activo);

            return response()->json([
                "mensaje" => $activo
            ]);
        }*/
    }

    public function update(Request $request, $id)
    {
        $activo = Activo::find($id);
        $activo->nombre = $request->input('nombre');
        $activo->m_delegacion_id  = $request->input('delegacion');
        $activo->m_empresa_id  = $request->input('empresa');
        $activo->m_resp_mtmo_id  = $request->input('responsable_mtmo');

        $activo->save();

        return redirect()->route('activo.index');
    }
}
