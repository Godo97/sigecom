<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Compenvl1Resource;
use App\Models\Compenvl1;
use Illuminate\Http\Request;

class Compenvl1Controller extends Controller
{
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Compenvl1Resource::collection(Compenvl1::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Compenvl1  $compenvl1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Compenvl1 $compenvl1)
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
        //
    }
}
