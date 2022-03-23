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
  width: 500px;
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
.type{
    color: #fff;
}
.select-2 {
    width: 200px;
    height: 35px;
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
  background-color: transparent;
  border: none;
  color: #555;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
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
.btn-search {
    width: 50px;
    height: 50px;
    background: #4F594C;
    border: none;
    font-size: 13pt;
    float: left;
    color: #fff;
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
.fond-values-lg {
    height: 60px;
    background: #CCD0D3;
    border: none;
    font-size: 11pt;
    font-style: italic;
    float: left;
    color: #555;
    -webkit-border-radius: 10PX;
    -moz-border-radius: 10PX;
    border-radius: 10PX;
}
.fond-values-md {
    height: 40px;
    background: #CCD0D3;
    border: none;
    font-size: 11pt;
    font-style: italic;
    float: left;
    color: #555;
    -webkit-border-radius: 10PX;
    -moz-border-radius: 10PX;
    border-radius: 10PX;
}
i {
    color: #555;
}
.full-search{
    background: #4F594C;
    height: 50px; 
    -moz-border-radius: 100px 100px 100px 100px;
    -webkit-border-radius: 100px 100px 100px 100px;
    border-radius: 100px 100px 100px 100px;
}
.negrita {
    font-weight: bold;
    color: #fff;
    font-style: italic;
}
.negrita-2 {
    font-weight: bold;
    font-size: 11pt;
}
.Pendiente{
    background: #538CC8;
}
.Progreso{
    background: #FF8A00;
}
.Completo{
    background: #8CC63F;
}
</style>
@section('contenido')
<div class="bar-first abs-center row">
    <div class="col-sm-3 col-md-2">
        <h5 class="type">Reportes de garantia</h5>
    </div>
    <div class="col-sm-3 col-md-8 abs-center">
        <form class="search row" action="/clientes/filtrar" method="POST">
            @csrf
            <div class="full-search">
                <select name="opc" id="opc" class="select">
                    <option value="nombre">Nombre</option>
                    <option value="correo">Correo</option>
                    <option value="area">Area</option>
                    <option value="serie">serie</option>
                    <option value="marca">marca</option>
                </select>
                <input type="text" id="search" name="valor" placeholder="Buscar en la base de datos" />
                <button class="btn-search" type="submit"><span class="bi bi-search"></button>
            </div>
        </form>
    </div>
    <div class="col-sm-3 col-md-8"></div>
</div>
<div class="container-fluid">
    <div class="row abs-center" style="margin-bottom: 25px;">
        <div class="col-sm-9 col-md-11">
            <div class="bar abs-center">
                <div class="col-sm-3 col-md-4 negrita">Datos del reporte:</div>
                <div class="col-sm-3 col-md-4 negrita">Contacto de cliente:</div>
                <div class="col-sm-3 col-md-2 negrita">Status</div>
                <div class="col-sm-3 col-md-2 negrita">Operaciones</div>
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
                            <p class="negrita-2">Reporte</p>
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
                <p class="negrita-2">{{$clientes->nombre}} {{$clientes->apellido}}</p>
                <div class="row">
                    <div class="col-sm-12 col-md-10 fond-values">
                        <i class="bi bi-briefcase-fill">  {{$clientes->area}}</i>
                    </div>
                </div>
                <div class="row" style="margin-top: 5px;">
                    <div class="col-sm-12 col-md-10 fond-values">
                        <i class="bi bi-building">  {{$clientes->dependencia}}</i>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-2 abs-center">
                <div class="select-2 abs-center {{$clientes->status}}">
                    {{$clientes->status}}
                </div>
            </div>
            <div class="col-sm-3 col-md-3 abs-center">
                <form action="{{ route ('clientes.destroy', $clientes->id)}}" method="POST">
                    <button type="reset" onclick="toggleHidden('#info-{{$clientes->id}}')" class="ibtn"><span class="bi bi-info-circle"></button>
                    <button type="reset" onclick="location.href='{{ route('clientes.pdfview' , $clientes->id) }}';" class="ibtn"><span class="bi-filetype-pdf"></button>
                    <button type="reset" onclick="location.href='/clientes/{{$clientes->id}}/edit';" class="ibtn"><span class="bi bi-pencil-square" ></button>
                    @csrf
                    @method('DELETE')
                    <button  type="submit" class="ibtn"><span class="bi bi-trash"></button>
                </form>
            </div>
        </div>
        <div id="info-{{$clientes->id}}" class="datas row" hidden>
            <div class="col-sm-3 col-md-4" style="margin-top: 5px; margin-bottom: 5px;">
                <div class="col">
                    <center>
                        <i class="bi bi-exclamation-triangle-fill">  Descripci&oacute;n del problema</i>
                        <div class="row">
                            <div class="col-sm-12 col-md-12 fond-values-lg">
                                {{$clientes->falla}}
                            </div>
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-sm-3 col-md-4" style="margin-top: 5px; margin-bottom: 5px;">
                <div class="row">
                    <div class="col-sm-12 col-md-12 fond-values">
                        <i class="bi bi-briefcase-fill">  {{$clientes->correo}}</i>
                    </div>
                </div>
                <div class="row" style="margin-top: 5px;">
                    <div class="col-sm-12 col-md-12 fond-values-md">
                        <i class="bi bi-geo-alt-fill">  {{$clientes->domicilio}}</i>
                    </div>
                </div>
                <div class="row" style="margin-top: 5px;">
                    <div class="col-sm-12 col-md-5 fond-values">
                        <i class="bi bi-phone-fill">  {{$clientes->telefono}}</i>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-2"></div>
            <div class="col-sm-3 col-md-2"></div>
        </div>
        @endforeach
        <script>
        function toggleHidden(selector) {
            console.log(selector);
            element = document.querySelector(selector);
            element.hidden = element.hidden ? false : true;
        }
        </script>
    </div>
</div>

@endsection