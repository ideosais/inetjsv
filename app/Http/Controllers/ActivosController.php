<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\ActivoCreateRequest;
use App\Models\Activos\Activo;
use App\Helpers;
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
            if($query['alive'] == '1')$q->where('alive', '=', '1'); elseif($query['alive'] == '0')$q->where('alive', '=', '0');
        })->get();

        return view('activos.list',compact('activos'));
    }

    public function create()
    {
        return view('activos.create');
    }

    public function edit($id)
    {
        $activo = Activo::find($id);
        return view('activos.edit')->with('activo',$activo);
    }

    public function store(ActivoCreateRequest $request)
    {
        $activo = new Activo;

        if($request->input('alive'))
            $alive = 1;
        else
            $alive = 0;

        $fecha_compra = \App\Helpers\IDEOSHelpers::cambia_fecha_a_mysql($request->input('fecha_compra'));

        $activo->nombre = $request->input('nombre');
        $activo->m_delegacion_id  = $request->input('delegacion');
        $activo->m_empresa_id  = $request->input('empresa');
        $activo->m_resp_mtmo_id  = $request->input('responsable_mtmo');
        $activo->valor_compra = $request->input('valor_compra');
        $activo->fecha_compra = $fecha_compra;
        $activo->descripcion = $request->input('descripcion');
        $activo->alive = $alive;

        $activo->save();

        Session::flash('message','Activo creado correctamente!');
        return redirect()->route('activo.index');
    }

    public function update(Request $request, $id)
    {
        $activo = Activo::find($id);

        if($request->input('alive'))
            $alive = 1;
        else
            $alive = 0;

        $fecha_compra = \App\Helpers\IDEOSHelpers::cambia_fecha_a_mysql($request->input('fecha_compra'));

        $activo->nombre = $request->input('nombre');
        $activo->m_delegacion_id  = $request->input('delegacion');
        $activo->m_empresa_id  = $request->input('empresa');
        $activo->m_resp_mtmo_id  = $request->input('responsable_mtmo');
        $activo->valor_compra = $request->input('valor_compra');
        $activo->fecha_compra = $fecha_compra;
        $activo->descripcion = $request->input('descripcion');
        $activo->alive = $alive;

        $activo->save();

        Session::flash('message','Activo actualizado correctamente!');
        return redirect()->route('activo.index');
    }

    public function destroy($id)
    {
        Activo::destroy($id);
        Session::flash('message','Activo eliminado correctamente!');
        return redirect()->route('activo.index');
    }
}
