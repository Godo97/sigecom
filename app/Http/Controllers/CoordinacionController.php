<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCoordinacionRequest;
use App\Http\Requests\UpdateCoordinacionRequest;
use App\Models\Coordinacion;

class CoordinacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('estructura/coordinacion/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCoordinacionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCoordinacionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coordinacion  $coordinacion
     * @return \Illuminate\Http\Response
     */
    public function show(Coordinacion $coordinacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coordinacion  $coordinacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Coordinacion $coordinacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCoordinacionRequest  $request
     * @param  \App\Models\Coordinacion  $coordinacion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCoordinacionRequest $request, Coordinacion $coordinacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coordinacion  $coordinacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coordinacion $coordinacion)
    {
        //
    }
}
