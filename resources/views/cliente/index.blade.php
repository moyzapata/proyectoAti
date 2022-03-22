@extends('layouts.plantilla')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

<style>
.bar {
    background: #538CC8;
    width: 100%;
    height: 40px; 
    -moz-border-radius: 100px 100px 100px 100px;
    -webkit-border-radius: 100px 100px 100px 100px;
    border-radius: 100px 100px 100px 100px;
}
.bar-first{
    background: linear-gradient(to right, #005FB0, #54CA4E);
    width: 100%;
    height: 85px;
    margin-bottom: 25px;
}
.datas{
    border-style:groove;
    width: 98%; 
    -moz-border-radius: 20px 20px 20px 20px;
    -webkit-border-radius: 20px 20px 20px 20px;
    border-radius: 20px 20px 20px 20px;
}
.search{
    overflow: hidden;
    vertical-align: middle;
    white-space: nowrap;
    margin-top: 15px;
}
.search input#search{
  width: 200px;
  height: 50px;
  background: #4F594C;
  border: none;
  font-size: 10pt;
  float: left;
  color: #fff;
  padding-left: 15px;
  -webkit-border-radius: 100px;
  -moz-border-radius: 100px;
  border-radius: 100px;
}
.search:hover button.icon, .search:active button.icon, .search:focus button.icon{
    outline: none;
    opacity: 1;
    margin-left: -50px;
  }
 
  .search:hover button.icon:hover{
    background: white;
  }
  .search:hover .icon{
  margin-top: 16px;
  color: #93a2ad;
 
  -webkit-transform:scale(1.5); /* Safari and Chrome */
  -moz-transform:scale(1.5); /* Firefox */
  -ms-transform:scale(1.5); /* IE 9 */
  -o-transform:scale(1.5); /* Opera */
   transform:scale(1.5);
  }
.select {
    width: 100px;
    height: 50px;
    background: #8CC63F;
    border: none;
    font-size: 10pt;
    float: left;
    color: #fff;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    border-radius: 100px;
}
.select-2 {
    width: 200px;
    height: 35px;
    background: #538CC8;
    border: none;
    font-size: 10pt;
    float: left;
    color: #fff;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    border-radius: 100px;
}
option {
    text-align:center;
}
.abs-center {
  display: flex;
  align-items: center;
  justify-content: center;
}
.ibtn {
  background-color: transparent; /* Blue background */
  border: none; /* Remove borders */
  color: #555; /* White text */
  padding: 12px 16px; /* Some padding */
  font-size: 16px; /* Set a font size */
  cursor: pointer; /* Mouse pointer on hover */
}
.btn-add {
    width: 40px;
    height: 40px;
    background: #CCD0D3;
    border: none;
    font-size: 10pt;
    float: left;
    color: #555;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    border-radius: 100px;
}
.fond-values {
    height: 20px;
    background: #CCD0D3;
    border: none;
    font-size: 11pt;
    float: left;
    color: #000;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    border-radius: 100px;
}
i {
    color: #555;
}
</style>
@section('contenido')
<div class="bar-first abs-center">
    <form class="search row" action="/clientes/filtrar" method="POST">
        @csrf
        <select name="opc" id="opc" class="select">
            <option value="nombre">Nombre</option>
            <option value="correo">Correo</option>
            <option value="area">Area</option>
            <option value="serie">serie</option>
            <option value="marca">marca</option>
        </select>
        <input type="text" id="search" name="valor" placeholder="Search..." />
        <!-- <button class = "btn btn-success btn-sm" type="submit"><span class="bi bi-search"></button> -->
    </form>
</div>
<div class="container-fluid">
    <div class="row abs-center" style="margin-bottom: 25px;">
        <div class="col-sm-9 col-md-11">
            <div class="bar abs-center">
                <div class="col-sm-3 col-md-4">Datos del reporte:</div>
                <div class="col-sm-3 col-md-4">Contacto de cliente:</div>
                <div class="col-sm-3 col-md-2">Status</div>
                <div class="col-sm-3 col-md-2">Operaciones</div>
            </div>
        </div>
        <div class="col-sm-3 col-md-1">
            <a href="clientes/create" class="btn-add abs-center"><span class="bi bi-plus-circle-fill"></a>
        </div>
    </div>
    <div class="row abs-center">
        @foreach ($clientes as $clientes)
        <div class="datas row">
            <div class="col-sm-3 col-md-4" style="margin-top: 5px;">
                <div class="col">
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <p><strong>Reporte</strong></p>
                        </div>
                        <div class="col-sm-6 col-md-6 fond-values">
                            <p><small>{{$clientes->id}}</small></p>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 5px;">
                        <div class="col-sm-6 col-md-6 fond-values">
                            <i class="bi bi-calendar3">  {{$clientes->created_at}}</i>
                        </div>
                        <div class="col-sm-6 col-md-6 fond-values">
                            <i class="bi bi-display">  {{$clientes->marca}}</i>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 5px;">
                        <div class="col-sm-6 col-md-6 fond-values">
                            <i class="bi bi-clock">  {{$clientes->created_at}}</i>
                        </div>
                        <div class="col-sm-6 col-md-6 fond-values">
                            <i class="bi bi-cpu">  {{$clientes->serie}}</i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-3" style="margin-top: 5px;">
                <div class="col">
                    <p><strong>{{$clientes->nombre}} {{$clientes->apellido}}</strong></p>
                    <div class="row">
                        <div class="col-sm-12 col-md-12 fond-values">
                            <i class="bi bi-briefcase-fill">  {{$clientes->area}}</i>
                        </div>
                    </div>
                    <div class="row" style="margin-top: 5px;">
                        <div class="col-sm-12 col-md-12 fond-values">
                            <i class="bi bi-building">  {{$clientes->dependencia}}</i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-2 abs-center">
            @method('PUT')
                <select class="select-2">
                    <option selected value="{{$clientes->status}}" onchange="location.href='/clientes/{{$clientes->id}}';">{{$clientes->status}}</option>
                    <option value="Pendiente">Pendiente</option>
                    <option value="En tramite">En tramite</option>
                    <option value="Terminado">Terminado</option>
                </select>
            </div>
            <div class="col-sm-3 col-md-3 abs-center">
                <form action="{{ route ('clientes.destroy', $clientes->id)}}" method="POST">
                    <button type="reset" onclick="location.href='{{ route('clientes.pdfview' , $clientes->id) }}';" class="ibtn"><span class="bi-filetype-pdf"></button>
                    <button type="reset" onclick="location.href='/clientes/{{$clientes->id}}/edit';" class="ibtn"><span class="bi bi-pencil-square" ></button>
                    @csrf
                    @method('DELETE')
                    <button  type="submit" class="ibtn"><span class="bi bi-trash"></button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection