
@extends('layouts.plantilla')
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
<style>
.modal {
  display: none;
  position: fixed; 
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto; 
  background-color: rgb(0,0,0); 
  background-color: rgba(0,0,0,0.4);
}

.modal-content {
  background-color: #fefefe;
  margin: 15% auto;
  padding: 20px;
  border: 1px solid #888;
  width: 50%; 
}

.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
</style>

@section('contenido')

@if(Session::has('Mensaje'))
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>{{ Session::get('Mensaje') }}</p>
        </div>
    </div> 
@endif
<h1 class="logo"> <span> Contacto Soporte</span></h1>
<div class="contact-wrapper animated bounceInUp">
    <div class="contact-form">
        <h3>Reporte Garantia</h3>
        <hr>
        <a href="/clientes/create" class="btn btn-success">Garantia</a>
        <a href="/servicios/create" class="btn btn-success">Servicio</a>
        <!-- formulario para agragar datos -->
        <form action="/clientes" method="POST">
            @csrf
            <p>
                <label>Nombre</label>
                <input id="nombre" type="text" name="nombre" class="form-control" tabindex="1">
            </p>
            <p>
                <label>Apellido</label>
                <input id="apellido" type="text" name="apellido" class="form-control" tabindex="2">
            </p>
            <p>
                <label>Correo Electronico</label>
                <input id="correo" type="email" name="correo" class="form-control" tabindex="3">
            </p>
            <p>
                <label>Dependencia/Institucion</label>
                <input id="dependencia" type="text" name="dependencia" class="form-control" tabindex="4">
            </p>
            <p>
                <label>Area</label>
                <input id="area" type="text" name="area" class="form-control" tabindex="5">
            </p>
            <p>
                <label>Domicilio</label>
                <input id="domicilio" type="text" name="domicilio" class="form-control" tabindex="6">
            </p>
            <p>
                <label>Numero de t&eacute;lefono</label>
                <input id="telefono" type="telefono" name="telefono" class="form-control" tabindex="7">
            </p> 
            
            <p>
                <label>Marca/Equipo</label>
                <input id="marca" type="text" name="marca" class="form-control" tabindex="9">
            </p>  
            <p>
                <label>Numero/serie</label>
                <input id="serie" type="text" name="serie" class="form-control" tabindex="10">
            </p>   
            <p>
                <label>Factura</label>
                <input id="factura" type="text" name="factura" class="form-control" tabindex="11">
            </p>          
            <p>
                <label>Descripcion del detalle</label> 
                <input id="falla" name="falla" class="form-control" tabindex="12">
            </p>
            <p class="block">
                <!-- <a href="/clientes" class="btn btn-secondary" tabindex="13">Cancelar</a> -->
                <button type="submit" class="btn btn-info" tabindex="14">
                    Enviar
                </button>
            </p>
        </form>
    </div>
    <div class="contact-info">
        <h4>Mas informacion de contacto </h4>
        <ul>
            <li><i class="fas fa-map-marker-alt"></i> Guadalajara <br><br>
                EDIFICIO MIND Av. Faro #2350 Piso 1, interior 1N Col. Verde Valle, Guadalajara, Jal. C.P. 44550
            <br> <br>
            Colima <br> <br>
            Alfonso Reyes #314, Col. Jardines Vista Hermosa, Colima, Col. C.P. 28017
        </li>
            <br>
            <li><i class="fas fa-phone"></i> +52 (312) 323 7443 / +52 (33) 3002 6144</li>
            <br>
            <li><i class="fas fa-envelope-open-text"></i> contacto@tecnologiaintegrada.com.mx</li>
        </ul>
        <p>No dejes que tu equipo se deteriore por falta de servicio, el &aacute;rea de Soporte T&eacute;cnico de ATI te apoya a solucionar de forma integral problemas referentes con el funcionamiento de tu Aula Interactiva y sus componentes. Nuestra prioridad es buscar soluciones que 
            le permitan ahorrar, mejorar y optimizar los tiempos de operaci&oacute;n.</p>
            <br>
        <a href="https://tecnologiaintegrada.com.mx/" style="color:blue;">www.tecnologiaintegrada.com.mx</a>
        
    </div>
</div>

<script>
var modal = document.getElementById("myModal");
var span = document.getElementsByClassName("close")[0];
modal.style.display = "block";
span.onclick = function() {
  modal.style.display = "none";
}
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
@endsection