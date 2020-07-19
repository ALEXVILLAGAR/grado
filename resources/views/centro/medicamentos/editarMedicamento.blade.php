@extends('plantilla/plantilla')

@section('contenido')
<div class="row">
	<h1 class="col-md-10 text-center shadow-lg p-3 mb-5 bg-white rounded bg-info panel col-md-offset-1">Editar Medicamento</h1>
	 
</div>

<div class="row">
     <br>
	<form action="{{ route('medicamento.update',$medicamento) }}" method="post" accept-charset="utf-8" class="col-md-10 col-md-offset-1  bg-color5 text-black">
    @csrf
    @method('PUT')
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="nombre"><h3>Nombre</h3></label>
      <input type="text" class="form-control" id="nombre" name="nombre" required="" value="{{ $medicamento->nombre }}">
    </div>
    <div class="form-group col-md-12">
      <label for="descripcion"><h3>Descripción</h3></label>
      <input type="text" class="form-control" id="descripcion"  name="descripcion" required="" value="{{ $medicamento->descripcion }}">
    </div>
    <div class="form-group col-md-12">
      <label for="cantidad"><h3>Cantidad</h3></label>
      <input type="number" min="0" class="form-control" id="cantidad" name="cantidad" required="" value="{{ $medicamento->cantidad }}">
      <br>
    </div>
    <input type="hidden" name="id" value="{{  $medicamento->id }}">
  </div>
  </div>
  <br>
  <button type="submit" class="btn btn-success col-md-4 col-md-offset-4 "><h4>Guardar</h4></button>	
   <div class="col-md-12">
   	<br>
   </div>
	</form>

	<div class="col-md-12 text-center">
		<a href="{{ route('medicamento.index') }}" title="" class="bg-dark"><h2>Regresar</h2></a>
	</div>

</div> 
@endsection
