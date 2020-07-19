@extends('plantilla/plantilla')

@section('contenido')
<div class="row">
	<h1 class="col-md-10 text-center shadow-lg p-3 mb-5 bg-white rounded bg-info panel col-md-offset-1">Medicamentos</h1>
	 
    </div>
    	<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css" rel="stylesheet" type="text/css">
    <div class="row">
        <div class="col-md-10 col-md-offset-1 datatable">
            <br>
            </br>
            <a class="btn btn-success col-md-5 col-md-offset-3" href="#staticBackdrop" data-toggle="modal" data-target="#crearMedicamento" type="">
                <h4>Agregar Medicamento</h4>
            </a>
            <br>
                <br>
                <br>
                    <table id="rutas" class="py-4 table-responsive">
                        <thead>
                            <tr class="bg-info">                                
                                <th>
                                    Nombre
                                </th>
                                <th>
                                    Descripción 
                                </th>
                                <th>
                                    Cantidad 
                                </th>
                                <th>
                                    Opciones
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                        	
                         	@foreach ($medicamentos as $medicamento)
                        	<tr>
                        		 <td><h3>{{$medicamento->nombre }}</h3></td>
                        		 <td><h3>{{$medicamento->descripcion }}</h3></td>
                                 <td><h3>{{$medicamento->cantidad }}</h3></td>
                        		 <td><a href="{{ route('medicamento.edit',$medicamento)}}" title="" class="btn btn-info"><i class="fas fa-edit"></i> Editar</a>
                        		 <a href="" title="" class="btn btn-danger"> <i class="fas fa-trash-alt"></i> Eliminar</a></td>
                        	</tr>
                        	@endforeach
                           
                        </tbody>
                    </table>
                </br>
            </br>
        </div>
         @include('centro.medicamentos.crearMedicamento')
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css"></script>
    <script charset="utf-8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js" type="text/javascript">
    </script>
    <script src="https://unpkg.com/vue">
        </script>
    <script>
        function cambiar($id){
            var url='users';
            $.ajax({
                url: url,
                type: 'get',
                success: function(response){
                    console.log(response);
                }
            });
        }
        $('#rutas').dataTable({
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
    <script>
    	$(document).ready( function () {
    $('#rutas').DataTable();
} );
    </script>
    </div>
{{-- @include('plantilla.footer') --}}
    


@endsection
