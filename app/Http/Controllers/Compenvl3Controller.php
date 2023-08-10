<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compenvl3;
use App\Models\Compenvl2;
use App\Models\Compenvl1;
use Illuminate\Support\Facades\DB;

class Compenvl3Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create($compenvl2)
    {   
        $compenvl3 = new Compenvl3();
        $compenvl2s = Compenvl2::where('id', $compenvl2)->get();
        $compenvl1s = DB::table('compenvl2s')
            ->join('compenvl1s', 'compenvl2s.compenvl1_id', '=', 'compenvl1s.id')
            ->select('compenvl2s.*', 'compenvl1s.compenvl1')
            ->where('compenvl2s.id', $compenvl2)
            ->get();
        //$compenvl1s = Compenvl1::get();
        //$compenvl1s = Compenvl2::where('id', $compenvl2->compenvl1_id)->get();
        return view('compenvl3.create', compact('compenvl3', 'compenvl2s', 'compenvl1s'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'codigo' => 'required | unique:compenvl3s,codigo',
            'compenvl1' => 'required',
            'compenvl2' => 'required',
            'compenvl3' => 'required | unique:compenvl3s,compenvl3',
        ],
        [
            'required' => 'Este campo no puede quedar vacío.',
            'numeric' => 'Este campo debe ser numerico.',
            'unique' => 'Este campo debe ser único.'
            
        ]);

        $compenvl3 = new Compenvl3;

        $compenvl3->codigo = $request->codigo;
        $compenvl3->compenvl1_id = $request->compenvl1;
        $compenvl3->compenvl2_id = $request->compenvl2;
        $compenvl3->compenvl3 = $request->compenvl3;
        $compenvl3->descripcion = $request->descripcion;

        $compenvl3->save();

        return redirect()->route('competencia')->with('success', 'Añadida competencia de nivel 3.');
    }

    public function edit(Compenvl3 $compenvl3)
    { 
        $compenvl2s = Compenvl2::where('id', $compenvl3->compenvl2_id)->get();
        //$compenvl2s = Compenvl2::get();
        //$compenvl1s = Compenvl1::all();
        $compenvl1s = Compenvl1::where('id', $compenvl3->compenvl1_id)->get();
        return view('compenvl3.edit', compact('compenvl1s', 'compenvl2s','compenvl3'));
    }
    public function update(Request $request, Compenvl3 $compenvl3)
    {
        $request->validate([
            'codigo' => 'required | numeric | unique:compenvl3s,codigo,' . $compenvl3->id,
            'compenvl1' => 'required',
            'compenvl2' => 'required',
            'compenvl3' => 'required | unique:compenvl3s,compenvl3,' . $compenvl3->id,
        ],
        [
            'required' => 'Este campo no puede quedar vacío.',
            'numeric' => 'Este campo debe ser numerico.',
            'unique' => 'Este campo debe ser único.'
            
        ]);
    }
    public function destroy(Compenvl3 $compenvl3)
    {
        var_dump($compenvl3);
        //$compenvl3->delete();
        return redirect(to: '/competencia')->with('destroy', 'Dato eliminado');
    }
}
