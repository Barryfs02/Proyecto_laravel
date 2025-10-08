@extends('layouts.main')
@section('titulo', $titulo)
@section('contenido')
<div class="wrapper">
  <div class="main-panel">
    @include('shared.main_header')
    <div class="container">
      <div class="page-inner">
        <h3 class="fw-bold mb-3">EDITAR USUARIO</h3>
        <form action="{{ route('usuarios.update', $item->id) }}" method="POST">
          @csrf
          @method('PUT')

          <div class="mb-3">
            <label for="name">Nombre del usuario</label>
            <input type="text" class="form-control" name="name" id="name" required value="{{ $item->name }}">
          </div>

          <div class="mb-3">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" required value="{{ $item->email }}">
          </div>

          <div class="mb-3">
            <label for="rol">Rol de usuario</label>
            <select name="rol" id="rol" class="form-select" required>
              <option value="">Selecciona el rol</option>
              <option value="admin" {{ $item->rol == 'admin' ? 'selected' : '' }}>Admin</option>
              <option value="cajero" {{ $item->rol == 'cajero' ? 'selected' : '' }}>Cajero</option>
            </select>
          </div>

          <div class="d-flex gap-2">
            <button class="btn btn-primary">Guardar</button>
            <a class="btn btn-info text-white" href="{{ route('nuevo_usuario') }}">Cancelar</a>
          </div>
        </form>
      </div>
    </div>
    @include('shared.footer')
  </div>
</div>
@endsection
