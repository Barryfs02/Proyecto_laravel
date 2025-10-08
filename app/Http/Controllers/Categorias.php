<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Categorias extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        
        $items=Categoria::all();
        return view('modules.categorias.index',compact('items'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $titulo ='CREAR_CATEGORIA';
        return view('modules.categorias.create',compact('titulo'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $item = new Categoria();
        $item->user_id=Auth::user() -> id;
        $item->nombre = $request->nombre;
        $item->save();
        return to_route('nueva_categoria');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $titulo="Eliminar Categoria";
        $item=Categoria::find($id);
        return view('modules.categorias.show', compact('item','titulo'));
    }
    /** 
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = Categoria::find($id);
        $titulo = 'EDITAR_CATEGORIA';
        return view('modules.categorias.edit', compact('item', 'titulo'));
    }
    
    public function update(Request $request, string $id)
    {
        $item = Categoria::find($id);
        $item->nombre = $request->nombre;
        $item->save();
        return to_route('nueva_categoria');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item=Categoria::find($id);
        $item->delete();
        return to_route('nueva_categoria');
    }
}
