<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
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

    public function store(Request $request)
    {
        if($request->ajax()){

            $activo = $request->all();

            Activo::create($activo);

            return response()->json([
                "mensaje" => $activo
            ]);
        }
    }
}
