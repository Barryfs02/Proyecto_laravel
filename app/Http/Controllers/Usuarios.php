<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Usuarios extends Controller
{
    public function index()
    {
        $items = User::all();
        return view('modules.usuarios.index', compact('items'));
    }

    public function create()
    {
        $titulo = 'CREAR_USUARIO';
        return view('modules.usuarios.create', compact('titulo'));
    }

    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'activo' => true,
            'rol' => $request->rol
        ]);

        return to_route('nuevo_usuario');
    }

    public function edit(string $id)
    {
        $item = User::find($id);
        $titulo = "Editar usuario";
        return view('modules.usuarios.edit', compact('item', 'titulo'));
    }

    public function update(Request $request, string $id)
    {
        $item = User::find($id);
        $item->name = $request->name;
        $item->email = $request->email;
        $item->rol = $request->rol;
        $item->save();
        return to_route('nuevo_usuario');
    }

    public function destroy(string $id) { }

    public function cambio_password($id, $password)
    {
        $item = User::find($id);
        $item->password = Hash::make($password);
        return $item->save();
    }

    public function tbody()
    {
        $items = User::all();
        return view('modules.usuarios.tbody', compact('items'));
    }

    public function estado($id, $estado)
    {
        $item = User::find($id);
        $item->activo = $estado;
        return $item->save();
    }
}
