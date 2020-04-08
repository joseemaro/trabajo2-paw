<html>
    <body>

    <button type="button" onclick="location.href='listar.php'">LISTA DE TURNOS</button>
    <button type="button" onclick="location.href='../index.php'">NUEVO TURNO</button>
    <br> <br>  

    <?php
        //TOMA EL ARCHIVO JSON
        $s = file_get_contents('../datos.json');
        if (!empty($s)){
            $ss = json_decode($s, true);
            foreach ($ss as $turn){
                foreach($turn as $arr){
                    //PARA CADA TURNO SE MUESTRAN LOS DATOS PEDIDOS
                    echo "INFORMACION DEL TURNO= <br><br>";
                   // echo "id: " . $arr['id'] . "<br>";
                    echo "Fecha del turno: " . $arr['fecha_turno'] . "<br>";
                    echo "Horario: " . $arr['horario']. "<br>";
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

    </body>
</html>