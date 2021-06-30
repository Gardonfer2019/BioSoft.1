<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
    <i class="fa fa-plus-circle" aria-hidden="true"></i> Agregar
</button>

<!-- Modal -->
<div class="modal fade " id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Agregar Nuevo Servicio</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          {{-- Furmulario --}}
          <form action="{{route('guardarServicios')}}" method="POST">
              @csrf
              <div class="form-group">
                <label for="selectRama">Seleccionar Rama</label>
                <select class="form-control" id="selectRama" name="selectRama">
                  @foreach ($listarRamas as $item)
                      <option value="{!! $item->id_rama !!}">{{$item->descripcion}}</option>
                  @endforeach
                </select>
              </div>

            <div class="form-group">
              <label for="nombre_servicio">Nombre Servicio</label>
              <input type="text" class="form-control" id="nombre_servicio" name="nombre_servicio">
            </div>

            <div class="form-group">
              <label for="prefijo_servicio">Prefijo del Servicio</label>
              <input type="text" class="form-control" id="prefijo_servicio" name="prefijo_servicio">
            </div>

            <div class="form-group">
                <label for="precio_servicio">Precio del Servicio</label>
                <input type="number" class="form-control" id="precio_servicio" name="precio_servicio">
            </div>

            <div class="form-group">
                <label for="textDescripcion">Descripcion</label>
                <textarea class="form-control" id="textDescripcion" name="textDescripcion" rows="3"></textarea>
            </div>

            <input type="hidden" name="borrado" value="0">
            
           
            <button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane" aria-hidden="true"></i> Enviar</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          
        </div>
      </div>
    </div>
  </div>