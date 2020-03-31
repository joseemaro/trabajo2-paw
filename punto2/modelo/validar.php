<?php

    class  validar{

        public function validarr(){
            $booleano = true;
            $msg = "";

            if(empty($_POST["nombre"])) {
                $msg = "El nombre es requerido <br>";
                $booleano= false;
            }
            if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) || !isset($_POST["email"]) ) {
                $msg = "No se ha indicado email o el formato no es correcto <br>";
                $booleano= false;
            }
            if(!filter_var($_POST["telefono"], FILTER_VALIDATE_INT) || empty($_POST["telefono"])) {
                $msg = "No se ha indicado telefono o el formato no es correcto <br>";
                $booleano= false;
            }
            if(!filter_var($_POST["edad"], FILTER_VALIDATE_INT) || $_POST["edad"]<1 || $_POST["edad"]>100) {
                $msg = "el formato de la edad no es correcto <br>";
                $booleano= false;
            }
            if(!filter_var($_POST["talla"], FILTER_VALIDATE_INT) || $_POST["talla"]>45 || $_POST["talla"]<20) {
                $msg = "el formato de la talla del calzado no es correcto <br>";
                $booleano= false;
            }
            if(!filter_var($_POST["altura"], FILTER_VALIDATE_INT) || $_POST["altura"]>200 || $_POST["altura"]<100) {
                $msg = "el formato de la altura no es correcto <br>";
                $booleano= false;
            }
            if ($_POST["color"] != "morocho" && $_POST["color"] != "rubio" && $_POST["color"] != "colorado" && $_POST["color"] != "castanio") {
                $msg = "No se ha indicado color de pelo(morocho,rubio,colorado,casta&ntilde;o) o el formato no es correcto <br>";
                $booleano= false;
            }
            $pattern="/^([0][8-9]|[1][0-7])[\:]([0-5][0-9])$/";
            if(empty($_POST["horario_turno"]) || !preg_match($pattern,$_POST["horario_turno"])) {
                $msg = "No se ha indicado el horario o el formato no es correcto <br>";
                $booleano= false;
            }
        
            if ($booleano) {
                echo "SE REGISTRO EL TURNO <br>";
                $msg .= "Gracias " . $_POST["nombre"] . " la fecha de su turno es el " . $_POST["fecha_turno"] . " a las " . $_POST["horario_turno"] . " horas. Lo esperamos <br>";
                $msg .= "------------------------- <br>";
                $msg .= "Nombre: " . $_POST["nombre"] . "<br>";
                $msg .= "Email: " . $_POST["email"] . "<br>";
                $msg .= "Telefono: " . $_POST["telefono"] . "<br>";
                $msg .= "Fecha nacimiento: " . $_POST["fecha_nacimiento"] . "<br>";
                $msg .= "Fecha del turno: " . $_POST["fecha_turno"] . "<br>";
                $msg .= "Horario del turno: " . $_POST["horario_turno"] . "<br>";
                return $msg;
            } else {
                $msg = "NO SE REGISTRO EL TURNO";
                return $msg;
            }

        }
    }
?>