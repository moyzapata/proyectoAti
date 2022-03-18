<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Servicio</title>
</head>
<body>
    <p>Hola! Se ha reportado un nuevo caso de garantia a las {{ $servicio->created_at }}.</p>
    <p>Estos son los datos que el usuario a proporcionado</p>
    <ul>
        <li>Nombre: {{ $servicio->nombre }}</li>
        <li>Dependencia: {{ $servicio->dependencia }}</li>
        <li>Equipo: {{ $servicio->marca }}</li>
        <li>No. serie: {{ $servicio->serie }}</li>
        <li>Falla: {{ $servicio->falla }}</li>
        <li>Tel&eacute;fono: {{ $servicio->telefono }}</li>
        <li>Correo: {{ $servicio->correo }}</li>
    </ul>
    <a href="http://127.0.0.1:8000/servicios">
        Ver reporte
    </a>
</body>
</html>