@extends('plantilla/plantilla')

@section('contenido')
<div class="row">
	<h1 class="col-md-10 text-center shadow-lg p-3 mb-5 bg-white rounded bg-info panel col-md-offset-1">Agregar auxiliar</h1> 
	 
</div>

<div class="row">
     <br>
	<form action="{{ route('auxiliar.store') }}" method="post" accept-charset="utf-8" class="col-md-10 col-md-offset-1  bg-color5 text-black">
    @csrf
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="nombre"><h3>Nombres</h3></label>
      <input type="text" class="form-control" id="nombres" placeholder="Nombre del auxiliar" name="nombre" required="">
    </div> 
    <div class="form-group col-md-12">
      <label for="apellido"><h3>Apellidos</h3></label>
      <input type="text" class="form-control" id="apellido" placeholder="Apellidos del auxiliar" name="apellido" required="">
    </div>
    <div class="form-group col-md-12">
      <label for="identificacion"><h3>Identificaciòn</h3></label>
      <input type="number" class="form-control" id="apellido" placeholder="Nùmero identificaciòn del auxiliar" name="identificacion" required="">
    </div>
    <div class="form-group col-md-12">
      <label for="email"><h3>Correo</h3></label>
      <input type="email" class="form-control" id="apellido" placeholder="Correo  del auxiliar" name="email" required="">
    </div>
    <div class="form-group col-md-12">
      <label for="telefono"><h3>Telèfono</h3></label>
      <input type="number" class="form-control" id="telefono" placeholder="Nùmero telèfonico del auxiliar" name="telefono" required="">
    </div>
  </div>

  <input type="hidden" name="entidad_id" value="{{ Auth::user()->Entidad->id }}">
  
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
