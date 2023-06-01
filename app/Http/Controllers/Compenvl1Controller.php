<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompenvl1Request;
use App\Http\Requests\UpdateCompenvl1Request;
use App\Models\Compenvl1;

class Compenvl1Controller extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('compenvl1.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCompenvl1Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCompenvl1Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Compenvl1  $compenvl1
     * @return \Illuminate\Http\Response
     */
    public function show(Compenvl1 $compenvl1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Compenvl1  $compenvl1
     * @return \Illuminate\Http\Response
     */
    public function edit(Compenvl1 $compenvl1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCompenvl1Request  $request
     * @param  \App\Models\Compenvl1  $compenvl1
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCompenvl1Request $request, Compenvl1 $compenvl1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Compenvl1  $compenvl1
     * @return \Illuminate\Http\Response
     */
    public function destroy(Compenvl1 $compenvl1)
    {
        $compenvl1->delete();
        return back();
    }
}
