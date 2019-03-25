<div class="modal fade" id="confirmarBorrar-{{$superheroe->id}}" role="dialog" aria-labelledby="confirmDeleteLabel" aria-hidden="true">

    <form action=" {{ route('superheroes.destroy', $superheroe->id)}}" method="POST">
      @csrf
      @method('DELETE')
  
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Eliminar</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        </div>
        <div class="modal-body">
          <strong>¿Estas seguro de eliminar el registro # {{$superheroe->id}} ?</strong>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-dismiss="modal">NO</button>
          <button type="submit" class="btn btn-danger" id="confirm">SI</button>
        </div>
      </div>
    </div>
    </form>
  </div>