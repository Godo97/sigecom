<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compenvl3;
use App\Models\Compenvl2;
use App\Models\Compenvl1;

class Compenvl3Controller extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $compenvl3 = new Compenvl3();
        $compenvl2s = Compenvl2::get();
        $compenvl1s = Compenvl1::get();
        return view('compenvl3.create', compact('compenvl3', 'compenvl2s', 'compenvl1s'));
    }
    public function store(Request $request)
    {
        //
    }
    public function show(Compenvl3 $compenvl3)
    {
        //
    }
    public function edit(Compenvl3 $compenvl3)
    {
        //
    }
    public function update(Request $request, Compenvl3 $compenvl3)
    {
        //
    }
    public function destroy(Compenvl3 $compenvl3)
    {
        var_dump($compenvl3);
        //$compenvl3->delete();
        return redirect(to: '/competencia')->with('destroy', 'Dato eliminado');
    }
}
