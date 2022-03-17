<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>cliente</title>
</head>
<body>
    <p>Hola! Se ha reportado un nuevo caso de garantia a las {{ $cliente->created_at }}.</p>
    <p>Estos son los datos que el usuario a proporcionado</p>
    <ul>
        <li>Nombre: {{ $cliente->nombre }}</li>
        <li>Dependencia: {{ $cliente->dependencia }}</li>
        <li>Equipo: {{ $cliente->marca }}</li>
        <li>No. serie: {{ $cliente->serie }}</li>
        <li>Falla: {{ $cliente->falla }}</li>
        <li>Tel&eacute;fono: {{ $cliente->telefono }}</li>
        <li>Correo: {{ $cliente->correo }}</li>
    </ul>
    <a href="http://127.0.0.1:8000/clientes">
        Ver reporte
    </a>
</body>
</html>