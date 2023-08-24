<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebasController extends Controller
{
    public function index(Request $request)
    {   
        $data = json_decode($request->getContent());
        return view('prueba', compact('data'));
    }

    public function action(Request $request)
    {   
        $data = json_decode($request->getContent());
        return view('prueba', $data);
    }
}
