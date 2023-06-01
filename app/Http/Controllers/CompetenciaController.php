<?php

namespace App\Http\Controllers;

use App\Models\Compenvl1;
use App\Models\Compenvl2;
use App\Models\Compenvl3;
use Illuminate\Http\Request;

class CompetenciaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $compenvl1s = Compenvl1::get();
        $compenvl2s = Compenvl2::get();
        $compenvl3s = Compenvl3::get();
        
        return view('competencia.index', [
            'compenvl1s' => $compenvl1s,
            'compenvl2s' => $compenvl2s,
            'compenvl3s' => $compenvl3s
        ]);
    }
}
