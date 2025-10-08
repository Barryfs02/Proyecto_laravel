@extends('layouts.main')
@section('titulo', $titulo)
@section('contenido')

<div class="wrapper">
  <div class="main-panel">
    @include('shared.main_header')

    <div class="container">
      <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
          <div>
            <h3 class="fw-bold mb-3">AGREGAR CLIENTE</h3>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Agregar Cliente</h4>
                <p>Registrar un nuevo cliente en el sistema</p>
              </div>
              <div class="card-body">

                <form action="{{ route('nuevo_cliente') }}" method="POST">
                  @csrf

                  <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input name="apellido" class="form-control" id="apellido" required>
                  </div>

                  <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input name="nombre" class="form-control" id="nombre" required>
                  </div>

                  <div class="mb-3">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input name="email" class="form-control" id="email" type="email" required>
                  </div>

                  <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i>Guardar</button>
                    <a class="btn btn-info text-white" href="{{ route('nuevos_clientes') }}"><i class="fa-brands fa-linux"></i></i>Cancelar</a>
                  </div>

                </form>

              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    @include('shared.footer')
  </div>
</div>

@endsection