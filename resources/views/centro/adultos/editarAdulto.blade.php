@extends('plantilla/plantilla')

@section('contenido')
<div class="row">
	<h1 class="col-md-10 text-center shadow-lg p-3 mb-5 bg-white rounded bg-info panel col-md-offset-1">Editar Adulto Mayor</h1> 
	 
</div>

<div class="row">
     <br>
	<form action="{{ route('mayor.update',$adulto) }}" method="post" accept-charset="utf-8" class="col-md-10 col-md-offset-1  bg-color5 text-black">
    @csrf
    @method('PUT')
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="nombres"><h3>Nombres</h3></label>
      <input type="text" class="form-control" id="nombres" name="nombres" required="" value="{{ $adulto->nombres }}">
    </div>
    <div class="form-group col-md-12">
      <label for="apellidos"><h3>Nombres</h3></label>
      <input type="text" class="form-control" id="apellidos"  name="apellidos" required="" value="{{ $adulto->apellidos }}">
    </div>
    <div class="form-group col-md-12">
      <label for="identificacion"><h3>Identificaciòn</h3></label>
      <input type="text" class="form-control" id="telefono" name="identificacion" required="" value="{{ $adulto->identificacion }}">
      <br>
    </div>
  </div>
  </div>
  <br>
  <button type="submit" class="btn btn-success col-md-4 col-md-offset-4 "><h4>Guardar</h4></button>	
   <div class="col-md-12">
   	<br>
   </div>
	</form>

	<div class="col-md-12 text-center">
		<a href="{{ route('mayor.index') }}" title="" class="bg-dark"><h2>Regresar</h2></a>
	</div>

</div>    	
{{-- @include('plantilla.footer') --}}
    


@endsection
