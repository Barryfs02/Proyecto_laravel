<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Productos extends Controller
{
    public function index()
    {
        $items = Producto::with('categoria')->get();
        return view('modules.productos.index', compact('items'));
    }

    public function create()
    {
        $titulo = 'CREAR_PRODUCTO';
        $categorias = Categoria::all();
        return view('modules.productos.create', compact('titulo', 'categorias'));
    }

    public function store(Request $request)
    {
        $item = new Producto();
        $item->id_user = Auth::id();
        $item->id_categoria = $request->id_categoria;
        $item->nombre = $request->nombre;
        $item->descripcion = $request->descripcion;
        $item->cantidad = $request->cantidad;
        $item->precio = $request->precio;
        $item->save();

        return to_route('nuevos_productos');
    }

    public function edit(string $id)
    {
        $item = Producto::findOrFail($id);
        $categorias = Categoria::all();
        $titulo = 'EDITAR_PRODUCTO';
        return view('modules.productos.edit', compact('item', 'titulo', 'categorias'));
    }

    public function update(Request $request, string $id)
    {
        $item = Producto::findOrFail($id);
        $item->id_categoria = $request->id_categoria;
        $item->nombre = $request->nombre;
        $item->descripcion = $request->descripcion;
        $item->cantidad = $request->cantidad;
        $item->precio = $request->precio;
        $item->save();

        return to_route('nuevos_productos');
    }

    public function show(string $id)
    {
        $titulo = 'ELIMINAR_PRODUCTO';
        $item = Producto::findOrFail($id);
        return view('modules.productos.show', compact('item', 'titulo'));
    }

    public function destroy(string $id)
    {
        $item = Producto::findOrFail($id);
        $item->delete();
        return to_route('nuevos_productos');
    }
}
