@extends('layouts.main')
@section('titulo', $titulo)
@section('contenido')
<div class="wrapper">
  <div class="main-panel">
    @include('shared.main_header')
    <div class="container">
      <div class="page-inner">
        <h3 class="fw-bold mb-3">AGREGAR PRODUCTO</h3>
        <form action="{{ route('nuevo_producto') }}" method="POST">
          @csrf

          <div class="mb-3">
            <label>Categoría</label>
            <select name="id_categoria" class="form-control" required>
              <option value="">Seleccione</option>
              @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
              @endforeach
            </select>
          </div>

          <div class="mb-3">
            <label>Nombre</label>
            <input name="nombre" class="form-control" required>
          </div>

          <div class="mb-3">
            <label>Descripción</label>
            <textarea name="descripcion" class="form-control" rows="3"></textarea>
          </div>

          <div class="mb-3">
            <label>Cantidad</label>
            <input name="cantidad" type="number" class="form-control" required>
          </div>

          <div class="mb-3">
            <label>Precio</label>
            <input name="precio" type="number" step="0.01" class="form-control" required>
          </div>

          <div class="d-flex gap-2">
            <button class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i>Guardar</button>
            <a class="btn btn-info text-white" href="{{ route('nuevos_productos') }}"><i class="fa-brands fa-linux"></i>Cancelar</a>
          </div>
        </form>
      </div>
    </div>
    @include('shared.footer')
  </div>
</div>
@endsection