<div class="modal fade" id="modal-delete-{{$empleado->id}}" tabindex="-1" arialabelledby="ModalLabel" aria-hidden="true">
<a href="{{ url('empleado/delete', $empleado->id) }}" data-bs-toggle="modal" data-bs-target="#modal-delete-{{ $empleado->id }}">
    <button type="button" class="btn btn-danger">Eliminar</button>
</a>
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Eliminar Usuario</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" arialabel="Close"></button>
    </div>

<div class="modal-body">
    <p>¿Está seguro que desea eliminar el usuario?</p>
    </div>
    <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bsdismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-primary">Confirmar</button>
    </div>
    </div>
</div>
</div>
