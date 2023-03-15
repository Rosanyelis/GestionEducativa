<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::all();
        return view('usuarios.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.create');
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
            'username' => ['required'],
            'email' => ['required', 'email', 'unique:'.User::class],
            'password' => ['required', /*'confirmed', Rules\Password::defaults()*/],
        ],
        [
            'username.required' => ['El campo Usuario es obligatorio'],
            'email.required' => ['El campo Correo Eletrónico es obligatorio'],
            'email.email' => ['El Correo Eletrónico debe ser válido'],
            'email.unique' => ['El campo Correo Eletrónico debe ser único'],
            'password.required' => ['El campo Password es obligatorio'],
        ]);

        $user = User::create([
            'name' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('configuraciones/usuarios')->with('success', 'Se ha Registrado el Usuario con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $count = User::where('id', $id)->count();
        if ($count>0) {
            $data = User::where('id', $id)->first();
            return view('usuarios.edit', compact('data'));
        }else{
            return redirect('configuraciones/usuarios')->with('error', 'Problemas para Mostrar el Registro.');
        }
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
        $count = User::where('id', $id)->count();
        if ($count>0) {
            $request->validate([
                'username' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255'],
            ]);
            $request->validate([
                'username' => ['required'],
                'email' => ['required', 'email'],
            ],
            [
                'username.required' => ['El campo Usuario es obligatorio'],
                'email.required' => ['El campo Correo Eletrónico es obligatorio'],
                'email.email' => ['El Correo Eletrónico debe ser válido'],
            ]);

            $registro = User::where('id', $id)->first();
            $registro->name = $request->username;
            $registro->email = $request->email;
            $registro->password = Hash::make($request->password);
            $registro->save();

            return redirect('configuraciones/usuarios')->with('success', 'Registro Actualizado Exitosamente');
        } else {
            return redirect('configuraciones/usuarios')->with('error', 'Problemas para Mostrar el Registro.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $count = User::where('id', $id)->count();
        if ($count>0) {
            $registro = User::where('id', $id)->delete();
            return redirect('configuraciones/usuarios')->with('success', 'Registro Eliminado Exitósamente');
        }else{
            return redirect('configuraciones/usuarios')->with('error', 'Problemas para Mostrar el Registro.');
        }
    }

}
