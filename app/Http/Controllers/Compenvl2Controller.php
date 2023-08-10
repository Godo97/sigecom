<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compenvl1;
use App\Models\Compenvl2;

class Compenvl2Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create($compenvl1)
    {
        $compenvl2 = new Compenvl2();

        //$compenvl1s = Compenvl1::get();
        $compenvl1s = Compenvl1::where('id', $compenvl1)->get();
        //$compenvl1s = Compenvl1::pluck('id', 'compenvl1');
        //$compenvl1 = $data;
        return view('compenvl2.create', compact('compenvl2', 'compenvl1s'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'codigo' => 'required | numeric | unique:compenvl2s,codigo',
            'compenvl1' => 'required',
            'compenvl2' => 'required | unique:compenvl2s,compenvl2',
        ],
        [
            'required' => 'Este campo no puede quedar vacío.',
            'numeric' => 'Este campo debe ser numerico.',
            'unique' => 'Este campo debe ser único.'
            
        ]);

        $compenvl2 = new Compenvl2;

        $compenvl2->codigo = $request->codigo;
        $compenvl2->compenvl1_id = $request->compenvl1;
        $compenvl2->compenvl2 = $request->compenvl2;
        $compenvl2->descripcion = $request->descripcion;

        $compenvl2->save();

        return redirect()->route('competencia')->with('success', 'Añadida competencia de nivel 2.');
    }

    public function edit(Compenvl2 $compenvl2)
    {   
        //$compenvl1s = Compenvl1::pluck('id', 'compenvl1');
        $compenvl1s = Compenvl1::where('id', $compenvl2->compenvl1_id)->get();
        return view('compenvl2.edit', compact('compenvl2', 'compenvl1s'));
    }

    public function update(Request $request, Compenvl2 $compenvl2)
    {
        $request->validate([
            'codigo' => 'required | numeric | unique:compenvl2s,codigo.' . $compenvl2->id,
            'compenvl1' => 'required',
            'compenvl2' => 'required | unique:compenvl2s,compenvl2,' . $compenvl2->id,
        ],
        [
            'required' => 'Este campo no puede quedar vacío.',
            'numeric' => 'Este campo debe ser numerico.',
            'unique' => 'Este campo debe ser único.'
            
        ]);
    }

    public function destroy(Compenvl2 $compenvl2)
    {   
        var_dump($compenvl2);
        //$compenvl2->delete();
        return redirect(to: '/competencia')->with('destroy', 'Dato eliminado');
        //return redirect(to: '/competencia')->with('fireAlert', true);
    }
}
