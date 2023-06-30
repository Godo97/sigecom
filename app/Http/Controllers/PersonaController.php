<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Models\Genero;
Use App\Models\Estatu;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersonaController extends Controller
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
        
        $personas = Persona::get();
        return view('persona.index', compact('personas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $persona = new Persona();
        $estatus = Estatu::get();
        //$estatus = Estatu::pluck('estatu', 'codigo', 'id');
        $generos = Genero::get();
        //$generos = Genero::pluck('genero', 'id');
        return view('persona.create', compact('persona', 'estatus', 'generos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'ci' => 'required | integer | unique:personas',
            'usuario' => 'required | size:10 | unique:personas',
            'pnombre' => 'required',
            'papellido'  => 'required',
            'foto' => 'required | image | mimes:jpg,png,jpeg,gif,svg | max:2048 | unique:personas',
            'genero' => 'required',
            'estatu' => 'required'
        ]);

        $file_name = time() . '.' . request()->foto->getClientOriginalExtension();

        request()->foto->move(public_path('img'), $file_name);

        $user = Auth::user()->name;

        $persona = new Persona;
        $persona->ci = $request->ci;
        $persona->usuario = $request->usuario;
        $persona->nombre = $request->pnombre;
        $persona->snombre = $request->snombre;
        $persona->apellido = $request->papellido;
        $persona->sapellido = $request->sapellido;
        $persona->foto = $file_name;
        $persona->genero_id = $request->genero;
        $persona->estatus_id = $request->estatu;
        $persona->created_by = $user;

        $persona->save();
        
        return redirect()->route('persona.index');
        //return redirect()->route('students.index')->with('success', 'Student Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Persona $persona)
    {
        return view('persona.show', compact('persona'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
