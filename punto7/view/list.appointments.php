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
            <?php if (!is_null($list)) { ?>
            <h1>Turnos</h1>
            <table border="1">
                <thead>
                <tr>
                    <!--<th scope="col" id= "">ID</th>-->
                    <th scope="col">Fecha</th>
                    <th scope="col">Hora</th>
                    <th scope="col">Nombre del paciente</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">Email</th>
                    <th scope="col">Link</th>
                </tr>
                </thead>
                <tbody>
                <?php
                //var_dump($list);
                foreach ($list as $ap) :?>
                    <?php foreach ($ap as $arr) :?>
                        <tr>
                            <td><?= $arr['fecha_turno'] ?></td>
                            <td><?= $arr['horario_turno'] ?></td>
                            <td><?= $arr['nombre'] ?></td>
                            <td><?= $arr['telefono'] ?></td>
                            <td><?= $arr['email'] ?></td>
                            <td> <a href="view_appointment?id=<?=$arr["id"]?>">Acceder</a></td>
                        </tr>
                    <?php endforeach ?>
                <?php endforeach?>
                <?php } else { ?>
                <p> No hay turnos registrados </p>
                <?php } ?>
                </tbody>
            </table>
        </section>
    </main>
</body>
</html>