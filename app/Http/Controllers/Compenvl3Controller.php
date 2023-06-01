<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompenvl3Request;
use App\Http\Requests\UpdateCompenvl3Request;
use App\Models\Compenvl3;

class Compenvl3Controller extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('compenvl2.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCompenvl3Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompenvl3Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Compenvl3  $compenvl3
     * @return \Illuminate\Http\Response
     */
    public function show(Compenvl3 $compenvl3)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Compenvl3  $compenvl3
     * @return \Illuminate\Http\Response
     */
    public function edit(Compenvl3 $compenvl3)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCompenvl3Request  $request
     * @param  \App\Models\Compenvl3  $compenvl3
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompenvl3Request $request, Compenvl3 $compenvl3)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Compenvl3  $compenvl3
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compenvl3 $compenvl3)
    {
        $compenvl3->delete();
        return back();
    }
}
