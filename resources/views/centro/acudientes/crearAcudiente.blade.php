<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-secondary">
        <h3 class="modal-title" id="staticBackdropLabel">Nuevo Acudiente de {{ $mayor->nombres }}</h3>       
      </div>
      <div class="modal-body">
       <form action="{{ route('acudiente.store') }}" method="post" accept-charset="utf-8">         
         @csrf
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="nombre"><h3>Nombres</h3></label>
      <input type="text" class="form-control" id="nombres" placeholder="Nombre del acudiente" name="nombre" required="">
    </div> 
    <div class="form-group col-md-12">
      <label for="apellido"><h3>Apellidos</h3></label>
      <input type="text" class="form-control" id="apellido" placeholder="Apellidos del del acudiente" name="apellido" required="">
    </div>
    <div class="form-group col-md-12">
      <label for="identificacion"><h3>Identificación</h3></label>
      <input type="number" class="form-control" id="apellido" placeholder="Nùmero identificaciòn del acudiente" name="identificacion" required="">
    </div>
    <div class="form-group col-md-12">
      <label for="email"><h3>Correo</h3></label>
      <input type="email" class="form-control" id="apellido" placeholder="Correo  del acudiente" name="email" required="">
    </div>
    <div class="form-group col-md-12">
      <label for="telefono"><h3>Teléfono</h3></label>
      <input type="number" class="form-control" id="telefono" placeholder="Nùmero telèfonico del acudiente" name="telefono" required="">
    </div>
    <input type="hidden" name="mayor_id" value="{{ $mayor->id }}">
  </div>
       <div class=" text-center row">
         <button type="submit"  class="btn btn-info col-md-3 col-md-offset-2">Guardar</button> 
        <button type="button" class="btn btn-danger col-md-3 col-md-offset-2" data-dismiss="modal">Cancelar</button>
        
      </div>

       </form>
        
      </div>
      
    </div>
  </div>
</div>