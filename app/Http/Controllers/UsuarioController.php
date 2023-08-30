<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use DataTables;
use Validator;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function index(Request $request)
    {   
        if ($request->ajax()) {
            $data = User::select('id','name','email')->get();
            return Datatables::of($data)->addIndexColumn()
                ->addColumn('action', function($data){
                    $button = '<button type="button" name="edit" id="'.$data->id.'" class="edit btn btn-primary btn-sm">Editar</button>';
                    $button .= '   <button type="button" name="edit" id="'.$data->id.'" class="delete btn btn-danger btn-sm">Eliminar</button>';
                    return $button;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('usuario/index');
    }

    public function store(Request $request)
    {
        $rules = array(
            'name'    =>  'required',
            'email'     =>  'required',
            'password'     =>  'required'
        );
 
        $error = Validator::make($request->all(), $rules);
 
        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }
 
        $pass = $request->password;
        $postpass = Hash::make($pass);
 
        $form_data = array(
            'name'        =>  $request->name,
            'email'         =>  $request->email,
            'password'         =>  $postpass
        );
 
        User::create($form_data);
 
        return response()->json(['success' => 'Data Added successfully.']);
        //return redirect()->route('usuario')->with('success', 'Usuario creado');
    }
 
    public function edit($id)
    {
        if(request()->ajax())
        {
            $data = User::findOrFail($id);
            return response()->json(['result' => $data]);
        }
    }
 
    public function update(Request $request)
    {
        $rules = array(
            'name'        =>  'required',
            'email'         =>  'required'
        );
 
        $error = Validator::make($request->all(), $rules);
 
        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }
 
        $form_data = array(
            'name'    =>  $request->name,
            'email'     =>  $request->email
        );
 
        User::whereId($request->hidden_id)->update($form_data);
 
        return response()->json(['success' => 'Data is successfully updated']);
    }
 
    public function destroy($id)
    {
        $data = User::findOrFail($id);
        $data->delete();
    }
}
