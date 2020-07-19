@extends('plantilla/plantilla')

@section('contenido')
<div class="row">
	<h1 class="col-md-10 text-center shadow-lg p-3 mb-5 bg-white rounded bg-info panel col-md-offset-1">Editar auxiliar</h1>
	 
</div>

<div class="row">
     <br>
	<form action="{{ route('auxiliar.update',$auxiliar) }}" method="post" accept-charset="utf-8" class="col-md-10 col-md-offset-1  bg-color5 text-black">
    @csrf
    @method('PUT')
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="nombres"><h3>Nombres</h3></label>
      <input type="text" class="form-control" id="nombres" name="nombres" required="" value="{{ $auxiliar->persona->nombres }}">
    </div>
    <div class="form-group col-md-12">
      <label for="apellidos"><h3>Teléfono</h3></label>
      <input type="text" class="form-control" id="apellidos"  name="apellidos" required="" value="{{ $auxiliar->persona->apellidos }}">
    </div>
    <div class="form-group col-md-12">
      <label for="identificacion"><h3>Identificaciòn</h3></label>
      <input type="text" class="form-control" id="telefono" name="identificacion" required="" value="{{ $auxiliar->persona->identificacion }}">
      <br>
    </div>
    <input type="hidden" name="id" value="{{  $auxiliar->persona->id }}">
  </div>
  </div>
  <br>
  <button type="submit" class="btn btn-success col-md-4 col-md-offset-4 "><h4>Guardar</h4></button>	
   <div class="col-md-12">
   	<br>
   </div>
	</form>

	<div class="col-md-12 text-center">
		<a href="{{ route('auxiliar.index') }}" title="" class="bg-dark"><h2>Regresar</h2></a>
	</div>

</div> 
@endsection
