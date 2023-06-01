<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompenvl2Request;
use App\Http\Requests\UpdateCompenvl2Request;
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
        return view('compenvl2.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCompenvl2Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompenvl2Request $request)
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
     * @param  \App\Http\Requests\UpdateCompenvl2Request  $request
     * @param  \App\Models\Compenvl2  $compenvl2
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompenvl2Request $request, Compenvl2 $compenvl2)
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
