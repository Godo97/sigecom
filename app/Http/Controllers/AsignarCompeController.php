<?php

namespace App\Http\Controllers;

use App\Http\Controllers\TreeController;
use Illuminate\Http\Request;

class AsignarCompeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $tree = TreeController::consulta();
        return view('asignar.index', compact('tree'));
    }

    public function create()
    {
        $tree = TreeController::tree();
        return view('asignar.create', $tree);
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
