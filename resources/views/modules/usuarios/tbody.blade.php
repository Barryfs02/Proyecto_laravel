@foreach ($items as $item)

<tr>
  <td>{{ $item->email }}</td>
  <td>{{ $item->name }}</td>
  <td>{{ $item->rol }}</td>
  <td>
    <a class="btn btn-secondary" onclick="agregar_id_usuario({{ $item->id }})" data-bs-toggle="modal" data-bs-target="#cambiar_password">
      <i class="fa-solid fa-unlock"></i>
    </a>
  </td>
  <td>
    <div class="form-check form-switch">
      <input class="form-check-input"  type="checkbox" id="{{ $item->id }}" {{ $item->activo ? 'checked' : '' }}>
    </div>
  </td>
  <td>
    <a href="{{ route('usuarios.edit', $item->id) }}"  class="btn btn-warning">
      <i class="fa-solid fa-pen-to-square"></i>
    </a>
  </td>
</tr>
@endforeach

