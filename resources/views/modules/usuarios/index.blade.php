@extends('layouts.main')

<div class="wrapper">
  <div class="main-panel">
    @include('shared.main_header')
    <div class="container">
      <div class="page-inner">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
          <div><h3 class="fw-bold mb-3">USUARIOS</h3></div>
        </div>

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Administrar Usuarios</h4>
                <p>Administrar nuestros Usuarios</p>
                <a href="{{ route('usuarios.create') }}" class="btn btn-outline-primary">
                  <i class="fa-solid fa-square-plus"></i> Agregar nuevo Usuario
                </a>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="basic-datatables" class="display table table-striped table-hover">
                    <thead>
                      <tr>
                        <th>Email</th>
                        <th>Nombre</th>
                        <th>Rol</th>
                        <th>Cambio de password</th>
                        <th>Activo</th>
                        <th>Editar</th>
                      </tr>
                    </thead>
                    <tbody id="tbody-usuarios">
                      @include('modules.usuarios.tbody')
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    @include('shared.footer')
    @include('modules.usuarios.modal_cambiar_password')
  </div>
</div>

@push('scripts')


<script>
 
  function recargar_tbody(){
    $.ajax({
      type : "GET",
      url : "{{ route('usuarios.tbody') }}",
      success : function(respuesta){
        $('#tbody-usuarios').html(respuesta);
      } 
    });
  }

  function cambiar_estado(id, estado) {
    
    $.ajax({
      type: "GET",
      url : "cambiar-estado/" + id + "/" + estado,
      success: function(respuesta){
        if(respuesta == 1){
          Swal.fire({title: 'Éxito!', text: 'Cambio de estado exitoso!', icon: 'success', confirmButtonText:'Aceptar'});
          recargar_tbody();
        } else {
          Swal.fire({title: 'Fallo!', text: 'No se llevó a cabo el cambio!', icon: 'error', confirmButtonText:'Aceptar'});
        }
      }
    });
  }

  function agregar_id_usuario(id) {
    $('#id_usuario').val(id);
  }

  function cambio_password(){
    let id = $('#id_usuario').val();
    let password = $('#password').val();
    $.ajax({
      type: "GET",
      url: "cambiar-password/" + id + "/" + password,
      success: function(respuesta){
        if(respuesta == 1){
          Swal.fire({title: 'Éxito!', text: 'Cambio de password exitoso!', icon: 'success', confirmButtonText:'Aceptar'});
          $('#cambiar_password').modal('hide');
          $('#frmPassword')[0].reset();
        } else {
          Swal.fire({title: 'Fallo!', text: 'Cambio de password no exitoso!', icon: 'error', confirmButtonText:'Aceptar'});
        }
      }
    });
    return false;
  }

  $(document).ready(function(){
    $('.form-check-input').on("change", function(){
      let id = $(this).attr("id");
      let estado = $(this).is(":checked") ? 1 : 0;
      cambiar_estado(id, estado);
    });
  });

  
</script>

@endpush