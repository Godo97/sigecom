<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGerencialRequest;
use App\Http\Requests\UpdateGerencialRequest;
use App\Models\Gerencial;

class GerencialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('estructura/gerencial/index');
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
     * @param  \App\Http\Requests\StoreGerencialRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGerencialRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gerencial  $gerencial
     * @return \Illuminate\Http\Response
     */
    public function show(Gerencial $gerencial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gerencial  $gerencial
     * @return \Illuminate\Http\Response
     */
    public function edit(Gerencial $gerencial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGerencialRequest  $request
     * @param  \App\Models\Gerencial  $gerencial
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGerencialRequest $request, Gerencial $gerencial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gerencial  $gerencial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gerencial $gerencial)
    {
        //
    }
}
