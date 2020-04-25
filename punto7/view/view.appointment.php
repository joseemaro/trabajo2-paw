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
    <?php include 'view/nav.view.php'; ?>
</header>
<main>
    <h1>Datos Personales</h1>
    <label> Nombre </label><?= $ap['nombre']?> <br>
    <label> Email </label><?= $ap['email']?> <br>
    <label> Teléfono </label><?= $ap['telefono']?> <br>
    <label> Edad </label><?= $ap['edad']?> <br>
    <label> Talla de calzado </label><?= $ap['talla_calzado']?> <br>
    <label> Altura </label><?= $ap['altura']?> <br>
    <label> Fecha de nacimiento </label><?= $ap['fecha_nacimiento']?> <br>
    <label> Color de pelo </label><?= $ap['color_pelo']?> <br>
    <h1>Datos del turno</h1>
    <label> Fecha del turno </label><?= $ap['fecha_turno']?> <br>
    <label> Horario del turno </label><?= $ap['horario_turno']?> <br>
</main>
</body>
</html>