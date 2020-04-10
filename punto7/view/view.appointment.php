<!doctype html>
<html lang="s">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resumen del turno</title>
</head>
<body>
<header>
    <nav>
        <ul>
            <li> <a href="/">Inicio</a> </li>
            <li> <a href="/new_appointment">Solicitar turno</a> </li>
            <li> <a href="/list_appointments">Listar turnos</a> </li>
        </ul>
    </nav>
</header>
<main>
    <h1>Datos Personales</h1>
    <label> Nombre </label><?= $json['nombre']?> <br>
    <label> Email </label><?= $json['email']?> <br>
    <label> Teléfono </label><?= $json['telefono']?> <br>
    <label> Edad </label><?= $json['edad']?> <br>
    <label> Talla de calzado </label><?= $json['talla_calzado']?> <br>
    <label> Altura </label><?= $json['altura']?> <br>
    <label> Fecha de nacimiento </label><?= $json['fecha_nacimiento']?> <br>
    <label> Color de pelo </label><?= $json['color_pelo']?> <br>
    <h1>Datos del turno</h1>
    <label> Fecha del turno </label><?= $json['fecha_turno']?> <br>
    <label> Horario del turno </label><?= $json['horario_turno']?> <br>
</main>
</body>
</html>