@extends('layouts.main')
@section('titulo', $titulo)
@section('contenido')
<div class="wrapper">
  <div class="main-panel">
    @include('shared.main_header')
    <div class="container">
      <div class="page-inner">
        <h3 class="fw-bold mb-3">Eliminar Producto</h3>
        <form method="POST" action="{{ route('productos.destroy', $item->id) }}">
          @csrf
          @method('DELETE')

          <div class="mb-3">
            <label>Nombre del Producto</label>
            <input class="form-control" value="{{ $item->nombre }}" readonly>
          </div>

          <div class="mb-3">
            <label>Descripción</label>
            <textarea class="form-control" rows="3" readonly>{{ $item->descripcion }}</textarea>
          </div>

          <div class="d-flex gap-2">
            <button class="btn btn-danger"><i class="fa-solid fa-trash"></i>Eliminar</button>
            <a class="btn btn-info text-white" href="{{ route('nuevos_productos') }}"><i class="fa-brands fa-linux"></i>Cancelar</a>
          </div>
        </form>
      </div>
    </div>
    @include('shared.footer')
  </div>
</div>
@endsection