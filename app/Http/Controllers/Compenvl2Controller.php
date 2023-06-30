<?php

namespace App\Http\Controllers;

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
        $compenvl1s = Compenvl1::get();
        return view('compenvl2.create', compact('compenvl2', 'compenvl1s'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\  $request
     * @return \Illuminate\Http\Response
     */
    public function store( $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Compenvl2  $compenvl2
     * @return \Illuminate\Http\Response
     */
    public function show(Compenvl2 $compenvl2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Compenvl2  $compenvl2
     * @return \Illuminate\Http\Response
     */
    public function edit(Compenvl2 $compenvl2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\  $request
     * @param  \App\Models\Compenvl2  $compenvl2
     * @return \Illuminate\Http\Response
     */
    public function update( $request, Compenvl2 $compenvl2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Compenvl2  $compenvl2
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compenvl2 $compenvl2)
    {
        $compenvl2->delete();
        return back();
    }
}
