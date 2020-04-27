@extends('plantilla/plantilla')

@section('contenido')
<div class="row">
	<h1 class="col-md-10 text-center shadow-lg p-3 mb-5 bg-white rounded bg-info panel col-md-offset-1">Agregar ruta</h1>
	 
</div>
 
<div class="row"> 
     <br>
	<form action="{{ route('routes.store') }}" method="post" accept-charset="utf-8" class="col-md-10 col-md-offset-1  bg-color5 text-black">
    @csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nombre"><h3>Nombre de la ruta</h3></label>
      <input type="text" class="form-control" id="nombre" placeholder="Nombre de la ruta" name="nombre" required="">
    </div>
    <div class="form-group col-md-6">
      <label for="telefono"><h3>Teléfono</h3></label>
      <input type="text" class="form-control" id="telefono" placeholder="Telefono de la ruta" name="telefono" required="">
    </div>
  </div>
  <div class="form-group col-md-12">
    <label for="descripcion"><h3>Descripción</h3></label>
    <textarea name="descripcion" class="form-control" id="descripcion" placeholder="descripcion de la ruta" required="">
    </textarea>
  </div>
  
  <button type="submit" class="btn btn-success col-md-4 col-md-offset-4"><h4>Guardar</h4></button>	
   <div class="col-md-12">
   	<br>
   </div>
	</form>

	<div class="col-md-12 text-center">
		<a href="{{ route('routes.index') }}" title="" class="bg-dark"><h2>Regresar</h2></a>
	</div>

</div>    	
{{-- @include('plantilla.footer') --}}
    


@endsection
