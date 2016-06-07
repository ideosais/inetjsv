<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Resp_mtmo;
use Session;
use Redirect;
use Illuminate\Routing\Route;

class Resp_mtmoController extends Controller
{

    public function index()
    {
        $resps_mtmo = Delegacion::get();
        return view('ajax.resps_mtmo')->with('resps_mtmo',$resps_mtmo);

    }

    public function find(Route $route){
        $this->resp_mtmo = Resp_mtmo::find($route->getParameter('resp_mtmo'));
        $this->notFound($this->resp_mtmo);
    }
}