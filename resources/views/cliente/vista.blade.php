@extends('layouts.plantilla')

<style>
    table thead {
        
  color: #fff;
  background-color: #0079A8;
  text-align:center;
}
</style>
@section('contenido')

<div class="container-fluid">
    <a href="clientes/create" class="btn btn-primary">Crear</a>
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>Fecha recepcion</th>
                    <th>Fecha tramite</th>
                    <th>Proveedor</th>
                    <th>Ticket garantia</th>
                    <th>Fecha envio proveedor</th>
                    <th>Fecha recepcion garantia</th>
                    <th>Fecha envio cliente</th>
                    <th>Nº guia cliente</th>
                    <th>Fecha recepcion cliente</th>
                    <th>Fecha de pruebas</th>
                    <th>Confirmacion</th>
                    <th>Status</th> 
                </tr>
            </thead>
            <tbody>
            @foreach ($clientes as $clientes)
                <tr>
                    <td>{{$clientes->fecha_recibido}} </td>
                    <td>{{$clientes->fecha_tramite}} </td>
                    <td>{{$clientes->proveedor}} </td>
                    <td>{{$clientes->ticket_garantia}} </td>
                    <td>{{$clientes->fecha_envio_proveedor}} </td>
                    <td>{{$clientes->fecha_recepcion_garantia}} </td>
                    <td>{{$clientes->fecha_envio_cliente}} </td>
                    <td>{{$clientes->no_guia_cliente}} </td>
                    <td>{{$clientes->fecha_recibido_cliente}} </td>
                    <td>{{$clientes->fecha_pruebas}} </td>
                    <td>{{$clientes->confirmacion}} </td>
                    <td>{{$clientes->status}} </td>
                    <td>
                        <!-- <a href="/PDF" class="btn btn-info btn-sm">Pdf</a> -->
                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#user-id">detall</button> 
                        <a href="/PDFclientes" class="btn btn-info btn-sm">GenerarPDF</a>
                        <form action="{{ route ('clientes.destroy', $clientes->id)}}" method="POST">
                            <a href="/clientes/{{$clientes->id}}/edit" class="btn btn-info btn-sm">Editar</a>
                            @csrf
                            @method('DELETE')
                            <button  type="submit" class="btn btn-danger btn-sm">Borrar</button>
                        </form>    
                    </td>
                </tr>
            @endforeach    
            </tbody>    
        <script src="{{ asset('js/script.js') }}"></script>
    </table>
</div>

@endsection