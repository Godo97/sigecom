<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Compenvl2Resource;
use App\Models\Compenvl2;
use Illuminate\Http\Request;

class Compenvl2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Compenvl2Resource::collection(Compenvl2::all());
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
     * @param  \App\Models\Compenvl2  $compenvl2
     * @return \Illuminate\Http\Response
     */
    public function show(Compenvl2 $compenvl2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Compenvl2  $compenvl2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Compenvl2 $compenvl2)
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
        //
    }
}
