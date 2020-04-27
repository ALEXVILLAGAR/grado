<!-- Modal -->
<div class="modal fade" id="crearPlan" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-secondary">
        <h3 class="modal-title" id="staticBackdropLabel">Nuevo Plan</h3>       
      </div>
      <div class="modal-body">
      <form action="{{ route('planes.store') }}" method="post" accept-charset="utf-8">         
         @csrf
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="nombre"><h3>Actividad</h3></label>
      <input type="text" class="form-control" id="actividad" placeholder="Nombre de la actividad" name="actividad" required="">
    </div> 
    <div class="form-group col-md-12">
      <label for="apellido"><h3>Descripción</h3></label>
      <input type="text" class="form-control" id="descripcion" placeholder="Descripción de la actividad" name="descripcion" required="">
    </div>
    {{-- <input type="hidden" name="mayor_id" value="{{ $mayor->id }}"> --}}
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