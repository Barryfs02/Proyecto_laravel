
@extends('layouts.main')
@section('titulo')
@section('contenido')
<div class="wrapper">
  <div class="main-panel">
    @include('shared.main_header')
    <div class="container">
      <div class="page-inner">
        <h3 class="fw-bold mb-3">PRODUCTOS</h3>
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Administrar Productos</h4>
            <a href="{{ route('productos.create') }}" class="btn btn-outline-primary">
              <i class="fa-solid fa-square-plus"></i> Agregar nuevo Producto
            </a>
          </div>
          <div class="card-body">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Descripción</th>
                  <th>Categoría</th>
                  <th>Cantidad</th>
                  <th>Precio</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                @foreach($items as $item)
                  <tr>
                    <td>{{ $item->nombre }}</td>
                    <td>{{ $item->descripcion }}</td>
                    <td>{{ $item->categoria->nombre ?? 'Sin categoría' }}</td>
                    <td>{{ $item->cantidad }}</td>
                    <td>${{ $item->precio }}</td>
                    <td>
                      <a href="{{ route('productos.edit', $item->id) }}" class="btn btn-warning">
                        <i class="fa-solid fa-pen-to-square"></i>
                      </a>
                      <a href="{{ route('productos.show', $item->id) }}" class="btn btn-danger">
                        <i class="fa-solid fa-trash"></i>
                      </a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    @include('shared.footer')
  </div>
</div>
@endsection