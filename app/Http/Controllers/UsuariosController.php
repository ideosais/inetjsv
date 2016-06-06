<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use Illuminate\Support\Facades;
use Session;


class UsuariosController extends Controller
{
    public function index()
    {
        $usuarios = User::get();
        return view('auth.list')->with('usuarios',$usuarios);
    }

    public function edit($id)
    {
        $usuario = User::find($id);
        return view('auth.edit')->with('usuario',$usuario);
    }

    public function update(Request $request)
    {

        if($request->ajax()){

            $usuario = $request->all();
            foreach ($usuario as $key => $value) {
                switch ($key) {
                    case 'name':
                        $campo = $value;
                        break;
                    case 'value':
                        $dato = $value;
                        break;
                    case 'pk':
                        $cod = $value;
                }
            }

            $usuario = User::find($cod);
            $usuario->$campo = $dato;
            $usuario->save();

            return response()->json(["mensaje" => $request->all()]);

        }
    }

    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('auth.list.index');
    }
}
