<html>
    <body>

    <button type="button" onclick="location.href='listar.php'">LISTA DE TURNOS</button>
    <button type="button" onclick="location.href='../index.php'">NUEVO TURNO</button>
    <br> <br>  

    <?php
        $s = file_get_contents('../datos.json');
        if (!empty($s)){
            $ss = json_decode($s, true);
            foreach ($ss as $turn){
                foreach($turn as $arr){
                    echo "INFORMACION DEL TURNO= <br><br>";
                    echo "Fecha del turno: " . $arr['fecha_turno'] . "<br>";
                    echo "Horario: " . $arr['horario']. "<br>";
                    echo "Nombre del paciente: " . $arr['nombre']. "<br>";
                    echo "Telefono del paciente: " . $arr['telefono']. "<br>";
                    echo "Email del paciente: " . $arr['email']. "<br>";
                    echo "aca iria el link";
                    echo "<br> <br>";                
                }
                
            }
        }

        /*$s = file_get_contents('../datos.json');
        print_r($s);
        $ss = json_decode($s, true);
        if (!empty($ss)){
            var_dump($ss);
        }else{
        echo "no hay turnos registrados";
        }*/
    ?>

    </body>
</html>