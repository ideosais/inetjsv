<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Empresa;
use Session;
use Redirect;

class EmpresasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $empresas = Empresa::get();
        return view('ajax.empresas')->with('empresas',$empresas);

    }

    public function find(Route $route){
        $this->empresa = Empresa::find($route->getParameter('empresa'));
        $this->notFound($this->empresa);
    }
}
