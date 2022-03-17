<html>
<style>
body {
    font-family: sans-serif;
}
#a { 
    font-size: xx-small;
    text-align: center;
}
#table {
   width: 100%;
   border-collapse:collapse;
}
#table-u {
   width: 100%;
}
.table-head {
    border-collapse:collapse;
}
td, th {
   width: 25%;
   text-align: left;
   vertical-align: top;
   border: 1px solid #000;
   border-spacing: 0;
   font-style: normal;
   font-family: sans-serif;
}
.container {
    max-width: 1000px;
    margin-left: 20px;
    margin-right: 20px;
    padding: 1.5em;
}
.margin {
    margin-bottom: 25px;
}
.td-last {
   width: 25%;
   text-align: center;
   vertical-align: top;
   border: 2px solid #000;
   border-spacing: 0;
   font-style: normal;
   font-family: sans-serif;
}
.td-fisrt {
   text-align: center;
   vertical-align: top;
   border: 0px solid #000;
   font-style: normal;
   font-family: sans-serif;
}
.td-allow {
   text-align: left;
   border: 0px solid #000;
   font-style: normal;
}
.td-bottom {
    width: 25%;
    text-align: center;
    vertical-align: top;
    border-bottom: 1px solid #000;
    border-spacing: 0;
}
</style>
    <head>
        <table id="table-u">
            <tbody>
                <tr>
                    <td class="td-fisrt"><p id="a"><strong>AVANCES T&Eacute;CNOLOGICOS EN<br/> INFORMATICA, S.A. DE S.V.</strong><br/>
                    RFC: ATI 030129 753<br/>
                    Edificio MIND v. Faro #2350 Piso 1,<br/> interior 1N, Col. Verde Valle,<br/> Guadalajara, Jal. C.P. 44550<br/>
                    Tec: (33) 3002 6144<br/>
                    www.tecnologiaintegrada.com.mx</p></td>
                    <td class="td-fisrt"><img src="logoati.jpg" title="Mi Imagen"></td>
                    <td class="td-fisrt">
                        <table class="table-head">
                            <tbody>
                                <tr>
                                    <tr>
                                        <td>Folio</td>
                                        <td>{{$servicios->id}}</td>
                                    </tr>
                                    <tr>
                                        <td>Fecha de Solicitud:</td>
                                        <td>{{$servicios->fecha}}</td>
                                    </tr>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </head>
    <body>
    <h3 style="text-align: center;">ORDEN DE SERVICIO</h3>
        <div class="container">
            <div class="margin">
                <table id="table">
                    <tbody>
                        <tr>
                            <tr>
                                <td colspan="4">DATOS DEL CLIENTE</td>
                            </tr>
                            <tr>
                                <th>Dependencia</th>
                                <td>{{$servicios->dependencia}}</td>
                                <th>&Aacute;rea</th>
                                <td>{{$servicios->area}}</td>
                            </tr>
                            <tr>
                                <th>Nombre de quien solicita el servicio</th>
                                <td colspan="3">{{$servicios->nombre}} {{$servicios->apellido}}</td>
                            </tr>
                            <tr>
                                <th height="30">Domicilio</th>
                                <td colspan="3" height="30">{{$servicios->domicilio}}</td>
                            </tr>
                            <tr>
                                <th>Tel&eacute;fono</th>
                                <td>{{$servicios->telefono}}</td>
                                <th>Correo</th>
                                <td>{{$servicios->correo}}</td>
                            </tr>
                            <tr>
                                <td colspan="4">DATOS DEL EQUIPO</td>
                            </tr>
                            <tr>
                                <th>Marca y modelo</th>
                                <td>{{$servicios->marca}} {{$servicios->modelo}}</td>
                                <th>No. serie</th>
                                <td>{{$servicios->serie}}</td>
                            </tr>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="margin">
                <table id="table">
                    <tbody>
                        <tr>
                            <tr>
                                <td class="td-allow">Descripci&oacute;n del problema reportado / servicio requerido</td>
                            </tr>
                            <tr>
                                <td style="text-align: center;" height="40">{{$servicios->falla}}</td>
                            </tr>
                        </tr>
                    </tbody>
                </table>
                <table id="table">
                    <tbody>
                        <tr>
                            <tr>
                                <td class="td-allow">Acciones realizadas</td>
                            </tr>
                            <tr>
                                <td style="text-align: center;" height="40">{{$servicios->acciones}}</td>
                            </tr>
                        </tr>
                    </tbody>
                </table>
                <table id="table">
                    <tbody>
                        <tr>
                            <tr>
                                <td class="td-allow">Resultado final del servicio</td>
                            </tr>
                            <tr>
                                <td style="text-align: center;" height="40">{{$servicios->resultado}}</td>
                            </tr>
                        </tr>
                    </tbody>
                </table>
                <table id="table">
                    <tbody>
                        <tr>
                            <tr>
                                <td class="td-allow">Evidencia</td>
                            </tr>
                            <tr>
                                <td style="text-align: center;" height="40"><img width=30px src="{{ $servicios->evidencias }}"></td>
                            </tr>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="margin">
                <table id="table-u">
                    <tbody>
                        <tr>
                            <td class="td-fisrt">
                                <table id="table">
                                    <tbody>
                                        <tr>
                                            <td class="td-fisrt" height="30" style="border-bottom:1px solid #000000"></td>
                                        </tr>
                                        <tr>
                                            <td class="td-fisrt">Nombre y firma del T&eacute;cnico asignado</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td class="td-fisrt"></td>
                            <td class="td-fisrt">
                                <table id="table">
                                    <tbody>
                                        <tr>
                                            <td class="td-fisrt" height="30" style="border-bottom:1px solid #000000"></td>
                                        </tr>
                                        <tr>
                                            <td class="td-fisrt">Nombre y firma de conformidad del cliente</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
    