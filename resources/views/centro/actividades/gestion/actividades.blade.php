@extends('plantilla/plantilla')

@section('contenido')
<div class="row">
	<h1 class="col-md-10 text-center shadow-lg p-3 mb-5 bg-white rounded bg-info panel col-md-offset-1">Actividades</h1>
	 
    </div> 

    	<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css" rel="stylesheet" type="text/css">
    <div class="row">
        <a href="#staticBackdrop" data-toggle="modal" data-target="#crearActividad" title="" class="btn btn-success col-md-4 col-md-offset-4"><i class="fas fa-plus-circle"></i> Nueva actividad</a>
        <br><br>
        @if (count($actividades))
            <div class="col-md-10 col-md-offset-1 datatable">
            <br>
            </br>
            <br>
                <br>
                <br>
                    <table id="productos" class="py-4 tabla-responsive">
                        <thead>
                            <tr class="bg-info">
                                <th>
                                    Actividad
                                </th>
                                <th>
                                    Descripción
                                </th>
                                <th>
                                    Acciones 
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($actividades as $acti)
                            <tr>
                                 <td><h3>{{$acti->actividad }}</h3></td>
                                 <td><h3>{{$acti->descripcion }}</h3></td> 

                                  <td><a href="{{ route('actividad.edit',$acti)}}" title="" class="btn btn-info"><i class="fas fa-edit"></i>
                                  </td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </br>
            </br>
        </div>
       
        @else
        <div class="alert alert-danger col-md-10 col-md-offset-1 text-center" role="alert">
             <h3>No hay actividades registradas en el sistema</h3>
        </div>
        @endif
        
        @include('centro.actividades.gestion.crearActividad')    
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
    <script charset="utf-8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js" type="text/javascript">
    </script>
    <script>
        function cambiar($id){
            var url='productos';
            $.ajax({
                url: url,
                type: 'get',
                success: function(response){
                    console.log(response);
                }
            });
        }
        $('#productos').dataTable({
        "processing":true,
        "lengthMenu": [[10,25,50,-1],[10,25,50,"ALL"]],
        "language":{
                    "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
                    },
    });
    </script>
    <script crossorigin="anonymous" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" src="https://code.jquery.com/jquery-3.3.1.min.js">
    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js">
    </script>
    </div>

    


@endsection
