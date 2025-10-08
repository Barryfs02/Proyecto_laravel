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
        <h3 class="fw-bold mb-3">CLIENTES</h3>
      </div>
    </div>


    
   <div class="row">
     <div class="col-md-12">
       <div class="card">
         <div class="card-header">
           <h4 class="card-title">Administrar Clientes</h4>
           <p>Administrar a los clientes </p>
           
           <a href="{{ route('clientes.create') }}" class="btn btn-outline-primary">
            <i class="fa-solid fa-square-plus"></i> Agregar nuevo Cliente
          </a>
         </div>
         <div class="card-body">
           <div class="table-responsive">
             <table
               id="basic-datatables"
               class="display table table-striped table-hover"
             >
             
               <thead>
                 <tr>
                  <th>id</th>
                   <th>IdUsuario </th>
                   <th>Nombre</th>
                   <th>Apellido</th>
                   <th>Email</th>
                   <th>Acciones</th>
                  </tr> 
               </thead>
                   
                   
                   
               <tfoot>
               
               </tfoot>
             <tbody>
             @foreach ($items as $item)
   

               <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->id_usuario}}</td>
                 <td>{{$item->nombre}}</td>
                  <td>{{$item->apellido}}</td>
                  <td>{{$item->email}}</td>
                  
                  </td>
                 <td><a href="{{ route('clientes.edit', $item->id) }}" class="btn btn-warning">
                   <i class="fa-solid fa-pen-to-square"></i>
                 </a>
                   <a href="{{ route('clientes.show', $item->id)}}" class="btn btn-danger"><i class="fa-solid fa-trash" ></i></a></td>
              
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