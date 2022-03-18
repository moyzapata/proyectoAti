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
.table-first {
   width: 100%;
}
.table-head {
    border-collapse:collapse;
}
.td-fisrt {
   text-align: center;
   vertical-align: top;
   border: 0px solid #000;
   font-style: normal;
   font-family: sans-serif;
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
    margin-left: 50px;
    margin-right: 50px;
}
.margin {
    margin-bottom: 25px;
}
.td-allow {
   text-align: left;
   border: 0px solid #000;
   font-style: normal;
   font-family: sans-serif;
}
</style>
    <head>
        <table class="table-first">
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
                                        <td>{{$clientes->id}}</td>
                                    </tr>
                                    <tr>
                                        <td>Fecha de Solicitud:</td>
                                        <td>{{$clientes->created_at}}</td>
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
        <h3 style="text-align: center;">HOJA DE SERVICIO</h3>
        <div class="container">
            <h3>Tipo de servicio: Garant&iacute;a</h3>
            <div class="margin">
                <table id="table">
                    <tbody>
                        <tr>
                            <tr>
                                <td colspan="4">DATOS DEL CLIENTE</td>
                            </tr>
                            <tr>
                                <th>Dependencia</th>
                                <td>{{$clientes->dependencia}}</td>
                                <th>&Aacute;rea</th>
                                <td>{{$clientes->area}}</td>
                            </tr>
                            <tr>
                                <th>Nombre de quien solicita el servicio</th>
                                <td colspan="3">{{$clientes->nombre}} {{$clientes->apellido}}</td>
                            </tr>
                            <tr>
                                <th height="30">Domicilio</th>
                                <td colspan="3" height="30">{{$clientes->domicilio}}</td>
                            </tr>
                            <tr>
                                <th>Tel&eacute;fono</th>
                                <td>{{$clientes->telefono}}</td>
                                <th>Correo</th>
                                <td>{{$clientes->correo}}</td>
                            </tr>
                            <tr>
                                <td colspan="4">DATOS DEL EQUIPO</td>
                            </tr>
                            <tr>
                                <th>Marca y modelo</th>
                                <td>{{$clientes->marca}} {{$clientes->modelo}}</td>
                                <th>No. serie</th>
                                <td>{{$clientes->serie}}</td>
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
                                <td class="td-allow">Descripci&oacute;n del problema reportado</td>
                            </tr>
                            <tr>
                                <td style="text-align: center;" height="70">{{$clientes->falla}}</td>
                            </tr>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="margin">
                <table class="table-first">
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