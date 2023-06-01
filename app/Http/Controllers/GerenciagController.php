<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoregerenciagRequest;
use App\Http\Requests\UpdategerenciagRequest;
use App\Models\gerenciag;

class GerenciagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('estructura/gerenciag/index');
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
     * @param  \App\Http\Requests\StoregerenciagRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoregerenciagRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\gerenciag  $gerenciag
     * @return \Illuminate\Http\Response
     */
    public function show(gerenciag $gerenciag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\gerenciag  $gerenciag
     * @return \Illuminate\Http\Response
     */
    public function edit(gerenciag $gerenciag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdategerenciagRequest  $request
     * @param  \App\Models\gerenciag  $gerenciag
     * @return \Illuminate\Http\Response
     */
    public function update(UpdategerenciagRequest $request, gerenciag $gerenciag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\gerenciag  $gerenciag
     * @return \Illuminate\Http\Response
     */
    public function destroy(gerenciag $gerenciag)
    {
        //
    }
}
