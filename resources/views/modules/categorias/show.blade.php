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
        <h3 class="fw-bold mb-3">Eliminar Categorias</h3>
      </div>
     </div>
      </div>
      <form  method="POST" action="{{ route("categorias.destroy",$item->id )}}">
        @csrf
        @method('DELETE')
          <div class="container">
            <h5 class="mb-3 fw-bold text-primary">Estas seguro de eliminar esta categorias</h5>
        
            <div class="mb-3">
              <label for="nombreCategoria" class="form-label">Nombre de categoria</label>
              <input name="nombre" class="form-control" id="nombre" value="{{ $item->nombre }}" readonly>
            </div>
        
            <div class="d-flex gap-2">
              <button class="btn btn-danger"><i class="fa-solid fa-trash"></i>Eliminar</button>
              <a type="button" class="btn btn-info text-white"  href="{{route("nueva_categoria")}}" ><i class="fa-brands fa-linux"></i></i>Cancelar</a>
            </div>
          </div>
          </form>  
<!---->
  </div>
</div>
        @include('shared.footer')
      </div>
      @endsection