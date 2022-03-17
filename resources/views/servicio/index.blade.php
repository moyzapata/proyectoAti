@extends('layouts.plantilla')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<link href="{{ asset('css/footer.css') }}" rel="stylesheet">

<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
<style>
    table thead {
  color: #fff;

}
/*  */
table, th{
    text-align:center;
    background:#538CC8;
}

</style>

@section('contenido')

<div class="container-fluid">
    <form action="/servicios/filtrar" method="POST">
        @csrf
        <div class="row">
            <div class="col">
                <a href="servicios/create" class="btn btn-primary btn-sm"><span class="bi bi-file-earmark-plus"></a>
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
    <!-- <form class="form-inline my-2 my-lg-0 float-right">
            <input name="buscarpor" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-success btn-sm" type="submit">Search</button>
    </form> -->
    <table class="table table-responsive">
    <thead style="text-align: left;">
        <tr> 
            <th scope="col"><strong>Servicios</strong></th>
        </tr> 
    </thead>
    <tbody>
        <td>
            <table class="table table-hover table-bordered" style="margin:5px; padding:5px;" >
                <thead>
                    <tr>    
                        <th scope="col">Nombre</th>
                        <!-- <th scope="col">Apellidos</th> -->
                        <th scope="col">Correo</th>
                        <!-- <th scope="col">Dependencia</th>   -->
                        <!-- <th scope="col">Area</th> -->
                        <th scope="col">Domicilio</th>
                        <th scope="col">Tel&eacute;fono</th>
                        <th scope="col">Marca</th>
                        <th scope="col">Serie</th>
                        <!-- <th scope="col">Factura</th> -->
                        <th scope="col">Falla</th>
                        <th scope="col">Componentes</th>
                        <!-- <th scope="col">Acciones</th> -->
                        <!-- <th scope="col">Resultados</th> -->
                        <!-- <th scope="col">Evidencias</th>  -->
                        <!-- <th scope="col">Creado</th> -->
                        <th></th> 
                    </tr>
                </thead>
                <tbody>
                    @foreach ($servicios as $servicios)
                    <tr>
                        <td>{{$servicios->nombre}} </td>
                        <!-- <td>{{$servicios->apellido}} </td> -->
                        <td>{{$servicios->correo}} </td>
                        <!-- <td>{{$servicios->dependencia}} </td> -->
                        <!-- <td>{{$servicios->area}} </td> -->
                        <td>{{$servicios->domicilio}} </td>
                        <td>{{$servicios->telefono}} </td>
                        <td>{{$servicios->marca}} </td>
                        <td>{{$servicios->serie}} </td>
                        <!-- <td>{{$servicios->factura}} </td> -->
                        <td>{{$servicios->falla}} </td>
                        <td>{{$servicios->componentes}} </td>
                        <!-- <td>{{$servicios->acciones}} </td>
                        <td>{{$servicios->resultado}} </td>
                        <td>{{$servicios->evidencias}} </td>
                        <td>{{$servicios->created_at}} </td> -->
                        <td>
                        <form action="{{ route ('servicios.destroy', $servicios->id)}}" method="POST">
                        <button type="reset" onclick="location.href='{{ route('servicios.pdfview' , $servicios->id) }}';" class="btn btn-success btn-sm"><span class="bi bi-file-pdf"></button>
                        <button type="reset" class="btn btn-default btn-sm" onclick="location.href='/servicios/{{$servicios->id}}/edit';"><span class="bi bi-pencil" ></button>
                        @csrf
                        @method('DELETE')
                        <button  type="submit" class="btn btn-danger btn-sm"><span class="bi bi-trash"></button>
                        </form>
                        </td>
                    </tr>
                </tbody>
                    </tr>
                    @endforeach
                </tbody>
                <script src="{{ asset('js/script.js') }}"></script>
            </table>
        </td>
    </tbody>
    </table>
</div>
@endsection