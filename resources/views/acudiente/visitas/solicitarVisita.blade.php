<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-secondary">
        <h3 class="modal-title" id="staticBackdropLabel">Solicitar Visita</h3>       
      </div>
      <div class="modal-body">
       <form action="{{ route('visitas.store') }}" method="post" accept-charset="utf-8">         
         @csrf
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="fecha"><h3>fecha</h3></label>
      <input type="date" class="form-control" id="fecha" name="fecha" required="">
    </div> 
    <input type="hidden" name="id_persona" value="{{ Auth::user()->persona->id }}">
  </div>
       <div class=" text-center row">
         <button type="submit"  class="btn btn-info col-md-3 col-md-offset-2">Solicitar</button> 
        <button type="button" class="btn btn-danger col-md-3 col-md-offset-2" data-dismiss="modal">Cancelar</button>
        
      </div>

       </form>
        
      </div>
      
    </div>
  </div>
</div>