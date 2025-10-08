<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Clientes extends Controller
{
    /**
     * Mostrar listado de clientes
     */
    public function index()
    {
        $items = Cliente::all();
        return view('modules.clientes.index', compact('items'));
    }

    /**
     * Mostrar formulario para crear cliente
     */
    public function create()
    {
        $titulo = 'CREAR_CLIENTE';
        return view('modules.clientes.create', compact('titulo'));
    }

    /**
     * Guardar nuevo cliente
     */
    public function store(Request $request)
    {
        $item = new Cliente();
        $item->id_usuario = Auth::id();
        $item->apellido = $request->apellido;
        $item->nombre = $request->nombre;
        $item->email = $request->email;
        $item->save();

        // Redirigir a la lista de clientes
        return to_route('nuevos_clientes');
    }

    /**
     * Mostrar formulario de confirmación de eliminación
     */
    public function show(string $id)
    {
        $titulo = "Eliminar Cliente";
        $item = Cliente::findOrFail($id);
        return view('modules.clientes.show', compact('item', 'titulo'));
    }


    
    /**
     * Mostrar formulario de edición
     */
    public function edit(string $id)
    {
        $item = Cliente::find($id);
        $titulo = 'EDITAR_CLIENTE';
        return view('modules.clientes.edit', compact('item', 'titulo'));
    }
    
    /**
     * Actualizar cliente
     */
    public function update(Request $request, string $id)
{
    $item = Cliente::find($id);
    $item->apellido = $request->apellido;
    $item->nombre = $request->nombre;
    $item->email = $request->email;
    $item->save();

    return to_route('nuevos_clientes');
}


    /**
     * Eliminar cliente
     */
    public function destroy(string $id)
{
    $item = Cliente::find($id);
    $item->delete();

    return to_route('nuevos_clientes');
}

}
