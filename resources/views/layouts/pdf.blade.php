<html>
<style>
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
td {
   width: 25%;
   text-align: center;
   vertical-align: top;
   border: 2px solid #000;
   border-spacing: 0;
   font-style: normal;
   font-family: Verdana;
}
.container {
    max-width: 1000px;
    margin-left: 50px;
    margin-right: 50px;
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
   font-family: Verdana;
}
.td-fisrt {
   text-align: center;
   vertical-align: top;
   border: 0px solid #000;
   font-style: normal;
   font-family: Verdana;
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
                    <td class="td-fisrt">logo</td>
                </tr>
            </tbody>
        </table>
    </head>
    <body>
        <h3 style="text-align: center;">HOJA DE SERVICIO</h3>
        <div class="container">
            <h3>Tipo de servicio: Garant&iacute;a</h3>
            <!-- <img src="{{ asset('logoati.JPG') }}" style="width: 200px; height: 200px;"> -->
            <div class="margin">
                <table id="table">
                    <tbody>
                        <tr>
                            <tr>
                                <td>Cliente</td>
                                <td>{{$clientes->nombre}} {{$clientes->apellido}}</td>
                            </tr>
                            <tr>
                                <td>Dependencia</td>
                                <td>{{$clientes->dependencia}}</td>
                            </tr>
                            <tr>
                                <td>&Aacute;rea</td>
                                <td>{{$clientes->area}}</td>
                            </tr>
                            <tr>
                                <td>Fecha de solicitud</td>
                                <td>{{$clientes->fecha_registro}}</td>
                            </tr>
                            <tr>
                                <td>Tel&eacute;fono</td>
                                <td>{{$clientes->telefono}}</td>
                            </tr>
                            <tr>
                                <td>Correo</td>
                                <td>{{$clientes->correo}}</td>
                            </tr>
                            <tr>
                                <td>Domicilio</td>
                                <td>{{$clientes->domicilio}}</td>
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
                                <td>Marca del equipo</td>
                                <td>{{$clientes->marca}}</td>
                            </tr>
                            <tr>
                                <td>N&uacute;mero de serie</td>
                                <td>{{$clientes->serie}}</td>
                            </tr>
                            <tr>
                                <td>Factura</td>
                                <td>{{$clientes->factura}}</td>
                            </tr>
                            <tr>
                                <td>Descripci&oacute;n de la falla</td>
                                <td>{{$clientes->falla}}</td>
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
                                            <td class="td-last">Entrega</td>
                                        </tr>
                                        <tr>
                                            <td class="td-last" height="30"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td class="td-fisrt"></td>
                            <td class="td-fisrt">
                                <table id="table">
                                    <tbody>
                                        <tr>
                                            <td class="td-last">Recibe</td>
                                        </tr>
                                        <tr>
                                            <td class="td-last" height="30"></td>
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