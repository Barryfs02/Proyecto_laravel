@extends('layouts.main')
@section('titulo', $titulo)
@section('contenido')
<div class="wrapper">
  <div class="main-panel">
    @include('shared.main_header')

    <div class="container">
      <div class="page-inner">
        <div class="d-flex align-items-left flex-column flex-md-row pt-2 pb-4">
          <div>
            <h3 class="fw-bold mb-3">AGREGAR USUARIO</h3>
          </div>
        </div>
        <form action="{{ route('usuarios.store') }}" method="POST">
          @csrf
          <label for="name">Nombre del usuario</label>
          <input type="text" class="form-control" required name="name" id="name">
          <label for="email">Email</label>
          <input type="text" name="email" id="email" class="form-control" required>
          <label for="password">Password</label>
          <input type="password" name="password" id="password" class="form-control" required>
          <label for="rol">Rol de usuario</label>
          <select name="rol" id="rol" class="form-select">
            <option value="">Selecciona el rol</option>
            <option value="admin">Admin</option>
            <option value="cajero">Cajero</option>
          </select>
          <button class="btn btn-primary mt-3">Guardar</button>
          <a href="{{ route('nuevo_usuario') }}" class="btn btn-info mt-3">Cancelar</a>
      </form>
    </div>
  </div>
  @include('shared.footer')
  </div>
</div>
@endsection
