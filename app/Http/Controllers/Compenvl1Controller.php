<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compenvl1;

class Compenvl1Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        $compenvl1 = new Compenvl1();
    
        return view('compenvl1.create', compact('compenvl1'));
    }


    public function store(Request $request)
    {
        //$compenvl1 = $request->user()->compenvl1s()->create([
        //    'codigo' => $request->codigo,
        //    'compenvl1' => $request->compenvl1,
        //    'descripcion' => $request->descripcion,
        //]);

        //return redirect()->route('compenvl1.edit', $compenvl1);
        
        $request->validate([
            'codigo' => 'required | numeric | unique:compenvl1s,codigo',
            'compenvl1' => 'required | unique:compenvl1s,compenvl1',
        ],
        [
            'required' => 'Este campo no puede quedar vacío.',
            'codigo.numeric' => 'Este campo debe ser numerico.',
            'unique' => 'Este campo debe ser único.'
            
        ]);

        $compenvl1 = new Compenvl1;

        $compenvl1->codigo = $request->codigo;
        $compenvl1->compenvl1 = $request->compenvl1;
        $compenvl1->descripcion = $request->descripcion;

        $compenvl1->save();

        return redirect()->route('competencia')->with('success', 'Añadida competencia de nivel 1.');
    }

    public function edit(Compenvl1 $compenvl1)
    {
        return view('compenvl1.edit', compact('compenvl1'));
    }


    public function update(Request $request, Compenvl1 $compenvl1)
    {
        //
    }

   
    public function destroy(Compenvl1 $compenvl1)
    {
        var_dump($compenvl1);
        //$compenvl1->delete();
        return redirect(to: '/competencia')->with('destroy', 'Dato eliminado');
        //return redirect(to: '/competencia')->alert()->error('Sweet Alert with error.');
    }
}
