<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalle de Reserva</title>
    <style>
        .signature-container {
            margin-top: 50px;
            text-align: center;
        }
        .signature-line {
            border-top: 1px solid black;
            width: 300px;
            margin: 0 auto;
        }
    </style>
</head>
<body>

<br>
<h1>Detalle de Reserva</h1>

<table id="reserva" class="table table-bordered table-striped table-sm" border="1">
    <thead class="thead">
    <tr>
        <th>Campo</th>
        <th>Detalle</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>Apartamento</td>
        <td>{{ $reserva['apartamento'] }}</td>
    </tr>
    <tr>
        <td>Nombre Completo</td>
        <td>{{ $reserva['nombre'] }}</td>
    </tr>
    <tr>
        <td>DNI</td>
        <td>{{ $reserva['dni'] }}</td>
    </tr>
    <tr>
        <td>Teléfono</td>
        <td>{{ $reserva['telefono'] }}</td>
    </tr>
    <tr>
        <td>Estado Civil</td>
        <td>{{ $reserva['estado_civil'] }}</td>
    </tr>
    <tr>
        <td>Fecha de Inicio</td>
        <td>{{ $reserva['fecha_inicio'] }}</td>
    </tr>
    <tr>
        <td>Fecha de Fin</td>
        <td>{{ $reserva['fecha_fin'] }}</td>
    </tr>
    <tr>
        <td>Monto a Pagar</td>
        <td>{{ $reserva['monto'] }} €</td>
    </tr>
    </tbody>
</table>

<div class="signature-container">
    <p>Firma del Cliente:</p>
    <div class="signature-line"></div>
</div>

</body>
</html>
