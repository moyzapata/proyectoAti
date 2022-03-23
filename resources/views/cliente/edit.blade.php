@extends('layouts.plantilla')
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
@section('contenido')
<div class="content">

        <h1 class="logo"> <span> Contacto Soporte</span></h1>

        <div class="contact-wrapper animated bounceInUp">
            <div class="contact-form">
                <h3>Reporte Garantia/Servicio</h3>

                <!-- formulario para agragar datos -->
                <form action="/clientes/{{$cliente->id}}" method="POST">

                    @csrf
                    @method('PUT')
                    <p>
                        <label>Nombre</label>
                        <input id="nombre" type="text" name="nombre" class="form-control" tabindex="1" Value="{{$cliente->nombre}}" readonly="readonly">
                    </p>
                    <p>
                        <label>Apellido</label>
                        <input id="apellido" type="text" name="apellido" class="form-control" tabindex="2" Value="{{$cliente->apellido}}" readonly="readonly">
                    </p>
                    <p>
                        <label>Correo Electronico</label>
                        <input id="correo" type="email" name="correo" class="form-control" tabindex="3" value="{{$cliente->correo}}" readonly="readonly">
                    </p>
                    <p>
                        <label>Dependencia/Institucion</label>
                        <input id="dependencia" type="text" name="dependencia" class="form-control" tabindex="4" value="{{$cliente->dependencia}}" readonly="readonly">
                    </p>
                    <p>
                        <label>Area</label>
                        <input id="area" type="text" name="area" class="form-control" tabindex="5" value="{{$cliente->area}}" readonly="readonly">
                    </p>
                    <p>
                        <label>Domicilio</label>
                        <input id="domicilio" type="text" name="domicilio" class="form-control" tabindex="6" value="{{$cliente->domicilio}}" readonly="readonly">
                    </p>
                    <p>
                        <label>Numero de télefono</label>
                        <input id="telefono" type="telefono" name="telefono" class="form-control" tabindex="7" value="{{$cliente->telefono}}" readonly="readonly">
                    </p> 
                    <p>
                        <label>Fecha</label>
                        <input id="fecha_registro" type="date" name="fecha_registro" class="form-control" tabindex="8" value="{{$cliente->fecha_registro}}" readonly="readonly">
                    </p>
                    <p>
                        <label>Marca/Equipo</label>
                        <input id="marca" type="text" name="marca" class="form-control" tabindex="9" value="{{$cliente->marca}}" readonly="readonly">
                    </p>  
                    <p>
                        <label>Numero/serie</label>
                        <input id="serie" type="text" name="serie" class="form-control" tabindex="10" value="{{$cliente->serie}}" readonly="readonly">
                    </p>   
                    <p>
                        <label>Factura</label>
                        <input id="factura" type="text" name="factura" class="form-control" tabindex="11" value="{{$cliente->factura}}" readonly="readonly">
                    </p>          
                    <p>
                       <label>Descripcion del detalle</label> 
                        <input id="falla" name="falla" class="form-control" tabindex="12" value="{{$cliente->falla}}" >
                    </p>
                    <p>
                       <label>Fecha recepcion de equipo</label> 
                        <input id="fecha_recibido" type="date" name="fecha_recibido" class="form-control" tabindex="12" value="{{$cliente->fecha_recibido}}">
                    </p>
                    <p>
                       <label>Fecha tramite garantia</label> 
                        <input id="fecha_tramite" type="date" name="fecha_tramite" class="form-control" tabindex="12" value="{{$cliente->fecha_tramite}}">
                    </p>
                    <p>
                       <label>Nombre proveedor</label> 
                        <input id="proveedor" type="text" name="proveedor" class="form-control" tabindex="12" value="{{$cliente->proveedor}}">
                    </p>
                    <p>
                       <label>Ticket de garantia</label> 
                        <input id="ticket_garantia" type="text" name="ticket_garantia" class="form-control" tabindex="12" value="{{$cliente->ticket_garantia}}">
                    </p>


                    <!-- <p> 
                    <select class="form-select" aria-label="Default select example">
                        <option selected value="{{$cliente->status_garantia}}">Status garantia</option>
                        <option value="">No iniciado</option>
                        <option value="">En tramite</option>
                        <option value="">Terminado</option>
                    </select>
                    </p>-->
                    <p>
                        <label>&iquest;Aplic&oacute; garantia&#63;</label> 
                        <select class="form-control" name="apli_garantia">
                        <option value="si">Si</option>
                        <option value="no">No</option>
                        </select>
                    </p>
                    <p>
                       <label>Fecha que envio el proveedor</label> 
                        <input id="fecha_envio_proveedor" type="date" name="fecha_envio_proveedor" class="form-control" tabindex="12" value="{{$cliente->fecha_envio_proveedor}}">
                    </p>
                    <p>
                       <label>Fecha recepcion de producto garantia</label> 
                        <input id="fecha_recepcion_garantia" type="date" name="fecha_recepcion_garantia" class="form-control" tabindex="12" value="{{$cliente->fecha_recepcion_garantia}}">
                    </p>
                    <p>
                       <label>Fecha de envio al cliente</label> 
                        <input id="fecha_envio_cliente" type="date" name="fecha_envio_cliente" class="form-control" tabindex="12" value="{{$cliente->fecha_envio_cliente}}">
                    </p>
                    <p>
                       <label>Nº de guia</label> 
                        <input id="no_guia_cliente" type="text" name="no_guia_cliente" class="form-control" tabindex="12" value="{{$cliente->no_guia_cliente}}">
                    </p>
                    <p>
                       <label>Fecha recibida del cliente</label> 
                        <input id="fecha_recibido_cliente" type="date" name="fecha_recibido_cliente" class="form-control" tabindex="12" value="{{$cliente->fecha_recibido_cliente}}">
                    </p>
                    <p>
                       <label>Fecha de pruebas</label> 
                        <input id="fecha_pruebas" type="date" name="fecha_pruebas" class="form-control" tabindex="12" value="{{$cliente->fecha_pruebas}}">
                    </p>
                    <p>
                       <label>Confirmacion de entrega</label> 
                        <input id="confirmacion" type="text" name="confirmacion" class="form-control" tabindex="12" value="{{$cliente->confirmacion}}">
                    </p>
                    <p>
                       <label>Status</label> 
                        <input id="status" type="text" name="status" class="form-control" tabindex="12" value="{{$cliente->status}}">
                    </p>
                    <p>
                        <label>Status</label> 
                        <select class="form-control" name="status">
                            <option selected value="{{$cliente->status}}">{{$cliente->status}}</option>
                            <option value="Pendiente">Pendiente</option>
                            <option value="Progreso">Progreso</option>
                            <option value="Completo">Completo</option>
                        </select>
                    </p>
                    <p class="block">
                        <a href="/clientes" class="btn btn-secondary" tabindex="13">Cancelar</a> 
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