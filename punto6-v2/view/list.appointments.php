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
                <?php
                //TOMA EL ARCHIVO JSON
                $dir = __DIR__ . "\\..\model\appointmets.json";
                $file = file_get_contents($dir);
                if (!empty($file)){
                    $json = json_decode($file, true);
                    foreach ($json as $ap){
                        foreach($ap as $arr){
                            //PARA CADA TURNO SE MUESTRAN LOS DATOS PEDIDOS
                            echo "INFORMACION DEL TURNO= <br><br>";
                            // echo "id: " . $arr['id'] . "<br>";
                            echo "Fecha del turno: " . $arr['fecha_turno'] . "<br>";
                            echo "Horario: " . $arr['horario_turno']. "<br>";
                            echo "Nombre del paciente: " . $arr['nombre']. "<br>";
                            echo "Telefono del paciente: " . $arr['telefono']. "<br>";
                            echo "Email del paciente: " . $arr['email']. "<br>";
                            echo "aca iria el link";
                            echo "<br> <br>";
                        }

                    }
                }else {
                    echo "no hay turnos registrados";
                }

                ?>
            </ul>
        </section>
    </main>
</body>
</html>