<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema de turnos</title>
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
        <section id="appointments">
            <h1>Turnos</h1>
            <ul>
                <?php foreach ($list as $tarea) : ?>
                    <li><?= $tarea ?></li>
                <?php endforeach ?>
            </ul>
        </section>
    </main>
</body>
</html>