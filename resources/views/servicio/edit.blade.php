@extends('layouts.plantilla')
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
@section('contenido')
<div class="content">

        <h1 class="logo"> <span> Contacto Soporte</span></h1>

        <div class="contact-wrapper animated bounceInUp">
            <div class="contact-form">
                <h3>Reporte Servicio</h3>

                <!-- formulario para agragar datos -->
                <form action="/servicios/{{$servicio->id}}" method="POST">

                    @csrf
                    @method('PUT')
                   
                    <!-- <p>
                        <label>Id</label>
                        <input id="id" type="text" name="id" class="form-control" tabindex="1" Value="{{$servicio->id}}">
                    </p> -->
                  
                    <p>
                        <label>Nombre</label>
                        <input id="nombre" type="text" name="nombre" class="form-control" tabindex="1" Value="{{$servicio->nombre}}" readonly="readonly">
                    </p>
                    <p>
                        <label>Apellido</label>
                        <input id="apellido" type="text" name="apellido" class="form-control" tabindex="2" Value="{{$servicio->apellido}}" readonly="readonly">
                    </p>
                    <p>
                        <label>Correo Electronico</label>
                        <input id="correo" type="email" name="correo" class="form-control" tabindex="3" value="{{$servicio->correo}}" readonly="readonly">
                    </p>
                    <p>
                        <label>Dependencia/Institucion</label>
                        <input id="dependencia" type="text" name="dependencia" class="form-control" tabindex="4" value="{{$servicio->dependencia}}" readonly="readonly">
                    </p>
                    <p>
                        <label>Area</label>
                        <input id="area" type="text" name="area" class="form-control" tabindex="5" value="{{$servicio->area}}" readonly="readonly">
                    </p>
                    <p>
                        <label>Domicilio</label>
                        <input id="domicilio" type="text" name="domicilio" class="form-control" tabindex="6" value="{{$servicio->domicilio}}" readonly="readonly">
                    </p>
                    <p>
                        <label>Numero de télefono</label>
                        <input id="telefono" type="telefono" name="telefono" class="form-control" tabindex="7" value="{{$servicio->telefono}}"readonly="readonly">
                    </p> 
                    
                    <p>
                        <label>Marca/Equipo</label>
                        <input id="marca" type="text" name="marca" class="form-control" tabindex="9" value="{{$servicio->marca}}" readonly="readonly">
                    </p>  
                    <p>
                        <label>Numero/serie</label>
                        <input id="serie" type="text" name="serie" class="form-control" tabindex="10" value="{{$servicio->serie}}" readonly="readonly">
                    </p>   
                    <p>
                        <label>Factura</label>
                        <input id="factura" type="text" name="factura" class="form-control" tabindex="11" value="{{$servicio->factura}}" readonly="readonly">
                    </p>          
                    <p>
                       <label>Descripcion del detalle</label> 
                        <input id="falla" name="falla" class="form-control" tabindex="12" value="{{$servicio->falla}}">
                    </p>
                    <p>
                       <label>Componentes</label> 
                        <input id="componentes" name="componentes" class="form-control" tabindex="12" value="{{$servicio->componentes}}">
                    </p>
                    <p>
                       <label>Acciones realizadas</label> 
                        <input id="acciones" name="acciones" class="form-control" tabindex="12" value="{{$servicio->acciones}}">
                    </p>
                    <p>
                       <label>Resultados</label> 
                        <input id="resultado" name="resultado" class="form-control" tabindex="12" value="{{$servicio->resultado}}">
                    </p>
                    <p>
                       <label>Evidencias</label> 
                       <input id="evidencias" type="file" class="form-control" tabindex="12" name="evidencias" value="{{$servicio->evidencias}}">

                        <!-- <input type="submit" value="{{$servicio->evidencias}}"> -->
                        <!-- <input id="evidencias" name="evidencias" class="form-control" tabindex="12" value="{{$servicio->evidencias}}"> -->
                    </p>
                    <p>
                        <label>Status</label> 
                        <select class="form-control" name="status">
                            <option selected value="{{$servicio->status}}">{{$servicio->status}}</option>
                            <option value="Pendiente">Pendiente</option>
                            <option value="Progreso">Progreso</option>
                            <option value="Completo">Completo</option>
                        </select>
                    </p>
                    <p class="block">
                        <a href="/servicios" class="btn btn-secondary" tabindex="13">Cancelar</a> 
                        <button type="submit" class="btn btn-info" tabindex="14">
                            Enviar
                        </button>
                    </p>
                </form>
            </div>
            <!-- <div class="contact-info"> 
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
                <p>No dejes que tu equipo se deteriore por falta de servicio, el área de Soporte Técnico de ATI te apoya a solucionar de forma integral problemas referentes con el funcionamiento de tu Aula Interactiva y sus componentes. Nuestra prioridad es buscar soluciones que 
                    le permitan ahorrar, mejorar y optimizar los tiempos de operación.</p>
                    <br>
                <p>www.tecnologiaintegrada.com.mx</p>
            </div>-->
        </div>

    </div>
@endsection