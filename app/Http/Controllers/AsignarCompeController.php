<?php

namespace App\Http\Controllers;

use App\Http\Controllers\TreeController;
use App\Models\Compersona;
use App\Models\Persona;
use Illuminate\Http\Request;
use DataTables;

class AsignarCompeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Compersona::select('id','persona_id','competencia')->get();
            return Datatables::of($data)->addIndexColumn()
                ->addColumn('action', function($data){
                    $button = '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-primary btn-sm">Editar</button>';
                    $button .= '   <button type="button" name="edit" id="'.$data->id.'" class="delete btn btn-danger btn-sm">Eliminar</button>';
                    return $button;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('asignar/index');
    }

    public function create()
    {
        $personas = Persona::get();
        $tree = TreeController::tree();
        return view('asignar.create', compact('tree', 'personas'));
    }

    public function store(Request $request)
    {   
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
