@extends('layouts.main')
<div class="wrapper">
    
      <div class="main-panel">
        @include('shared.main_header')

        
<div class="container">
  <div class="page-inner">
    <div
      class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4"
    >
      <div>
        <h3 class="fw-bold mb-3">CATEGORIAS</h3>
      </div>
     </div>


     
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Administrar Categoria</h4>
            <p>Administrar las categorias de nuestros productos</p>
            
            <a type="button" href="{{route('categorias.create')}}" class="btn btn-outline-primary"><i class="fa-solid fa-square-plus"></i>Agregar nueva Categoria</a>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table
                id="basic-datatables"
                class="display table table-striped table-hover"
              >
                <thead>
                  <tr>
                    <th>Nombre Categoria</th>
                    <th>Acciones</th>
                  </tr> 
                </thead> 
                <tfoot>
                </tfoot>
              <tbody>
              @foreach ($items as $item)
                <tr>
                  <td>{{$item->nombre}}
                  </td>
                  <td><a href="{{ route('categorias.edit', $item->id) }}" class="btn btn-warning">
                    <i class="fa-solid fa-pen-to-square"></i>
                  </a>
                    <a href="{{ route('categorias.show', $item->id)}}" class="btn btn-danger"><i class="fa-solid fa-trash" ></i></a></td>
                </tr>
                @endforeach
              </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>       
  </div>
</div>


        @include('shared.footer')
      </div>