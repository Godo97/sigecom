<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compenvl1;
use App\Models\Compenvl2;

class Compenvl2Controller extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $compenvl2 = new Compenvl2();
        //$compenvl1s = Compenvl1::get();
        $compenvl1s = Compenvl1::pluck('id', 'compenvl1');
        //$compenvl1 = $data;
        return view('compenvl2.create', compact('compenvl2', 'compenvl1s'));
    }


    public function store(Request $request)
    {
        //
    }

   
    public function show(Compenvl2 $compenvl2)
    {
        //
    }

    public function edit(Compenvl2 $compenvl2)
    {   
        $compenvl1s = Compenvl1::pluck('id', 'compenvl1');
        return view('compenvl2.edit', compact('compenvl2', 'compenvl1s'));
    }

    public function update(Request $request, Compenvl2 $compenvl2)
    {
        //
    }

    public function destroy(Compenvl2 $compenvl2)
    {
        $compenvl2->delete();
        return back();
    }
}
