@extends('plantilla/plantilla')

@section('contenido')
<div class="row">
	<h1 class="col-md-10 text-center shadow-lg p-3 mb-5 bg-white rounded bg-info panel col-md-offset-1">Agregar adulto</h1>
	 
</div>

<div class="row">
     <br>
	<form action="{{ route('mayor.store') }}" method="post" accept-charset="utf-8" class="col-md-10 col-md-offset-1  bg-color5 text-black">
    @csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="name"><h3>Nombres</h3></label>
      <input type="text" class="form-control" id="nombres" placeholder="Nombres" name="nombres" required="">
    </div>
    <div class="form-group col-md-6">
      <label for="apellido"><h3>Apellidos</h3></label>
      <input type="text" class="form-control" id="apellido" placeholder="Apellidos" name="apellidos" required="">
    </div>
  </div> 
  <div class="form-group col-md-6">
    <label for="identificacion"><h3>Identificación</h3></label>
    <input type="text" class="form-control" id="identificacion" placeholder="Documento de identidad" name="identificacion" required="">
  </div>
  <div class="form-group col-md-12">
    <label for="descripcion"><h3>Descripción</h3></label>
    <textarea name="descripcion" class="form-control" id="descripcion" placeholder="Algo importante para registrar">
    </textarea>
  </div>
  
  <button type="submit" class="btn btn-success col-md-4 col-md-offset-4"><h4>Registrar</h4></button>	
   <div class="col-md-12">
   	<br>
   </div>
	</form>

	<div class="col-md-12 text-center">
		<a href="{{ url('adultos') }}" title="" class="bg-dark"><h2>Regresar</h2></a>
	</div>

</div>    	
{{-- @include('plantilla.footer') --}}
    


@endsection
