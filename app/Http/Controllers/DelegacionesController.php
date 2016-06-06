<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Delegacion;
use Session;
use Redirect;
use Illuminate\Routing\Route;

class DelegacionesController extends Controller
{

    public function index()
    {
        $delegaciones = Delegacion::get();
        return view('ajax.delegaciones')->with('delegaciones',$delegaciones);

    }

    public function find(Route $route){
        $this->delegacion = Delegacion::find($route->getParameter('delegacion'));
        $this->notFound($this->delegacion);
    }
}
