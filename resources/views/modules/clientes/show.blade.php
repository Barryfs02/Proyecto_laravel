@extends('layouts.main')
@section('titulo', 'Eliminar Cliente')
@section('contenido')
<div class="wrapper">
  <div class="main-panel">
    @include('shared.main_header')
    <div class="container">
      <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
          <div>
            <h3 class="fw-bold mb-3">Eliminar Cliente</h3>
          </div>
        </div>

        <form method="POST" action="{{ route('clientes.destroy', $item->id) }}">
          @csrf
          @method('DELETE')

          <div class="container">
            <h5 class="mb-3 fw-bold text-primary">¿Estás seguro de eliminar este cliente?</h5>

            <div class="mb-3">
              <label for="apellido" class="form-label">Apellido</label>
              <input name="apellido" class="form-control" id="apellido" value="{{ $item->apellido }}" readonly>
            </div>

            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre</label>
              <input name="nombre" class="form-control" id="nombre" value="{{ $item->nombre }}" readonly>
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Correo electrónico</label>
              <input name="email" class="form-control" id="email" value="{{ $item->email }}" readonly>
            </div>

            <div class="d-flex gap-2">
              <button  class="btn btn-danger"  ><i class="fa-solid fa-trash"></i>Eliminar</button>
              <a class="btn btn-info text-white" href="{{ route('nuevos_clientes') }}"><i class="fa-brands fa-linux"></i>Cancelar</a>
            </div>
          </div>
        </form>
      </div>
    </div>
    @include('shared.footer')
  </div>
</div>
@endsection