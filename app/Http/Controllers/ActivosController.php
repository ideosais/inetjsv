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

    }

    public function create()
    {
        return view('activos.create');
    }

    public function store(ActivoCreateRequest $request)
    {
        $activo = new Activo;
        $activo->nombre = $request->input('nombre');
        $activo->delegacion  = $request->input('m_delegacion_id');
        $activo->empresa  = $request->input('m_empresa_id');
        $activo->responsable_mtmo  = $request->input('m_resp_mtmo_id');

        $activo->save();

        return redirect()->route('activo.create');

        /**if($request->ajax()){

            $activo = $request->all();

            Activo::create($activo);

            return response()->json([
                "mensaje" => $activo
            ]);
        }*/
    }
}
