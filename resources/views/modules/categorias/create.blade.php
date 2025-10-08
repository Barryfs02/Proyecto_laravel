@extends('layouts.main')
@section('titulo',$titulo)
@section ('contenido')
<div class="wrapper">
    
      <div class="main-panel">
        @include('shared.main_header')

        
<div class="container">
  <div class="page-inner">
    <div
      class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
    >
      <div>
        <h3 class="fw-bold mb-3">AGREGAR CATEGORIAS</h3>
      </div>
     </div>


     
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Agregar Categoria</h4>
            <p>Administrar </p>
            
            <a type="button" h class="btn btn-outline-primary"><i class="fa-solid fa-square-plus"></i>Agregar nueva Categoria</a>
          </div>
          <div class="card-body">
            
          </div>
        </div>
      </div>
      
<form action="{{ route("categorias.store") }}" method="POST">
    @csrf
      <div class="container">
        <h5 class="mb-3 fw-bold text-primary">Agregar nueva categoria</h5>
    
        <div class="mb-3">
          <label for="nombreCategoria" class="form-label">Nombre de categoria</label>
          <input name="nombre" class="form-control" id="nombre" placeholder="">
        </div>
    
        <div class="d-flex gap-2">
          <button class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i>Guardar</button>
          <a type="button" class="btn btn-info text-white"  href="{{route("nueva_categoria")}}" ><i class="fa-brands fa-linux"></i>Cancelar</a>
        </div>
      </div>
      </form>  

  </div>
</div>


        @include('shared.footer')
      </div>
      @endsection