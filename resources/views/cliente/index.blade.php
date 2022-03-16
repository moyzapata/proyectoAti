@extends('layouts.plantilla')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

<style>
    table thead {
  color: #fff;

}
table, th{
    text-align:center;
    background:#538CC8;
}
</style>
@section('contenido')

<div class="container-fluid">
    <form action="/clientes/filtrar" method="POST">
        @csrf
        <div class="row">
            <div class="col">
                <a href="clientes/create" class="btn btn-primary btn-sm"><span class="bi bi-file-earmark-plus"></a>
            </div>
            <div class="col">
                <select name="opc" id="opc" class="form-control">
                    <option value="nombre">Nombre</option>
                    <option value="correo">Correo</option>
                    <option value="area">Area</option>
                    <option value="serie">serie</option>
                    <option value="marca">marca</option>
                </select>
            </div>
            <div class="col">
                <input class="form-control" type="text" name="valor" placeholder="Buscar">
            </div>
            <div class="col">
                <button class = "btn btn-success btn-sm" type="submit"><span class="bi bi-search"></button>
            </div>
        </div>    
    </form>
    <table class="table table-responsive">
        <thead class="table-dark" align="left">
            <tr> 
                <th scope="col"><strong>Garantias</strong></th>
            </tr> 
        </thead>
        <tbody>
            <td>
                <table class="table table-hover table-bordered" style="margin:5px; padding:5px;">
                    <thead>
                        <tr>
                            <th scope="col">Status</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Domicilio</th>
                            <th scope="col">Descripción de la Falla</th>
                            <th scope="col">Marca</th>
                            <th scope="col">No. Serie</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Dependencia</th>  
                            <th scope="col">Area</th>
                            <th scope="col">Teléfono</th>
                            <th scope="col">Factura</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $clientes)
                        <tr>
                            <td>{{$clientes->status}} </td>            
                            <td>{{$clientes->nombre}} </td>
                            <td>{{$clientes->domicilio}} </td>
                            <td>{{$clientes->falla}} </td>
                            <td>{{$clientes->marca}} </td>
                            <td>{{$clientes->serie}} </td>
                            <td>{{$clientes->correo}} </td>
                            <td>{{$clientes->dependencia}} </td>
                            <td>{{$clientes->area}} </td>
                            <td>{{$clientes->telefono}} </td>
                            <td>{{$clientes->factura}} </td>
                            <td>
                            <form action="{{ route ('clientes.destroy', $clientes->id)}}" method="POST">
                            <!-- <button type="reset" class="btn btn-success btn-sm" onclick="location.href='/PDFclientes';"><span class="bi bi-file-pdf"></button> -->
                            <button type="reset" onclick="location.href='{{ route('clientes.pdfview' , $clientes->id) }}';" class="btn btn-success btn-sm"><span class="bi bi-file-pdf"></button>
                            <button type="reset" onclick="location.href='/clientes/{{$clientes->id}}/edit';" class="btn btn-default btn-sm"><span class="bi bi-pencil" ></button>
                            <!-- <a href="/PDFclientes" class="btn btn-success btn-sm"><span class="bi bi-file-pdf"></a>
                            <a href="/clientes/{{$clientes->id}}/edit" class="btn btn-default btn-sm"><span class="bi bi-pencil" > </a> -->
                            @csrf
                            @method('DELETE')
                            <button  type="submit" class="btn btn-danger btn-sm"><span class="bi bi-trash"></button>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </td>
        </tbody>
    </table>
</div>

@endsection