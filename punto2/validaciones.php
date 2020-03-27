<?php     
   $booleano= true;

   if(empty($_POST["nombre"])){
        echo "El nombre es requerido <br>";
        $booleano= false;
    }
    if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) || empty($_POST["email"])){
        echo "No se ha indicado email o el formato no es correcto <br>";
        $booleano= false;
    }
    if(!filter_var($_POST["telefono"], FILTER_VALIDATE_INT) || empty($_POST["telefono"])){
        echo "No se ha indicado telefono o el formato no es correcto <br>";
        $booleano= false;
    }
    if(!filter_var($_POST["edad"], FILTER_VALIDATE_INT) || $_POST["edad"]<1 || $_POST["edad"]>100){
        echo "el formato de la edad no es correcto <br>";
        $booleano= false;
    }
    if(!filter_var($_POST["talla"], FILTER_VALIDATE_INT) || $_POST["talla"]>45 || $_POST["talla"]<20){
        echo "el formato de la talla del calzado no es correcto <br>";
        $booleano= false;
    }
    if(!filter_var($_POST["altura"], FILTER_VALIDATE_INT) || $_POST["altura"]>200 || $_POST["altura"]<100){
        echo "el formato de la altura no es correcto <br>";
        $booleano= false;
    }
    if ($_POST["color"] != "morocho" && $_POST["color"] != "rubio" && $_POST["color"] != "colorado" && $_POST["color"] != "castanio"){
        echo "No se ha indicado color de pelo(morocho,rubio,colorado,casta&ntilde;o) o el formato no es correcto <br>";
        $booleano= false;
    }
   /* $pattern="/^([0-1][0-8])[\:]([0-5][0-9])$/";
    Altura(cm): <input type="text" name="altura" minlength="2" maxlength="3" min="20" max="210" required pattern="{20,210}"><br>
   */
    $pattern="/^([0][8-9]|[1][0-7])[\:]([0-5][0-9])$/";
    if(empty($_POST["horario_turno"]) || !preg_match($pattern,$_POST["horario_turno"])){
        echo "No se ha indicado el horario o el formato no es correcto <br>";
        $booleano= false;
    }

    if ($booleano) {
        echo "SE REGISTRO EL TURNO <br>";
        echo "Gracias " . $_POST["nombre"] . " la fecha de su turno es el " . $_POST["fecha_turno"] . " a las " . $_POST["horario_turno"] . " horas. Lo esperamos <br>";
        echo "------------------------- <br>";
        echo "Nombre: " . $_POST["nombre"] . "<br>";
        echo "Email: " . $_POST["email"] . "<br>";
        echo "Telefono: " . $_POST["telefono"] . "<br>";
        echo "Fecha nacimiento: " . $_POST["fecha_nacimiento"] . "<br>";
        echo "Fecha del turno: " . $_POST["fecha_turno"] . "<br>";
        echo "Horario del turno: " . $_POST["horario_turno"] . "<br>";
    }else{
        echo "NO SE REGISTRO EL TURNO";
    }



?>