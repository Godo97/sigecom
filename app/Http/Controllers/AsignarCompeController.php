<?php

namespace App\Http\Controllers;

use App\Http\Controllers\TreeController;
use Illuminate\Http\Request;

class AsignarCompeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $tree = TreeController::consulta();
        return view('asignar.index', compact('tree'));
    }

    public function create()
    {
        $tree = TreeController::tree();
        return view('asignar.create', compact('tree'));
    }

    public function store(Request $request)
    {
        if ($request->isMethod('post')){
            $nombre = $request->input("persona");
            //var_dump($nombre);
        }
        
        
        $datos = $request->json()->all();
        if ($request->ajax()) {
            echo $datos;
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
