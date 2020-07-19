@extends('plantilla/plantilla')

@section('contenido')
<div class="row">
  <h1 class="col-md-10 text-center shadow-lg p-3 mb-5 bg-white rounded bg-info panel col-md-offset-1">Editar Actividad</h1>
   
</div>
 
<div class="row">
     <br>
  <form action="{{ route('actividad.update',$actividad) }}" method="post" accept-charset="utf-8" class="col-md-10 col-md-offset-1  bg-color5 text-black">
    @csrf
    @method('PUT')
  <div class="form-row">
    <div class="form-group col-md-12">
      <label for="actividad"><h3>Actividad</h3></label>
      <input type="text" class="form-control" id="actividad" name="actividad" required="" placeholder="" value="{{ $actividad->actividad }}">
    </div>
    <div class="form-group col-md-12">
      <label for="descripcion"><h3>Descripción</h3></label>
      <input type="text" class="form-control" id="descripcion"  name="descripcion" required="" placeholder="" value="{{ $actividad->descripcion }}">
      <br />
    </div>
  </div>
  </div>
  <br>
  <button type="submit" class="btn btn-success col-md-4 col-md-offset-4 "><h4>Actualizar</h4></button> 
   <div class="col-md-12">
    <br>
   </div>
  </form>

  <div class="col-md-12 text-center">
    <a href="{{ route('actividad.index') }}" title="" class="bg-dark"><h2>Regresar</h2></a>
  </div>
    
@endsection
