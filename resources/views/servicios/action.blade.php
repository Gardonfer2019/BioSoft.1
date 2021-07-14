<form action="{{ route('servicios.eliminar', $id_examen) }}" method="post">
    @csrf
    @method('DELETE')

    <a href="{{ route('servicios.show', $id_examen) }}" class="btn btn-info btn-sm"><i class="icon ion-md-eye"
            aria-hidden="true"></i></a>
    <a href="{{ route('servicios.editForm', $id_examen) }}" class="btn btn-warning btn-sm"><i class="icon ion-md-create"
            aria-hidden="true"></i></a>


    <button type="submit" name="submit"  class="btn btn-danger btn-sm "
        onclick="return confirm('¿Estas Seguro?')">
        <i class="icon ion-md-trash" aria-hidden="true"></i>
    </button>
</form>
