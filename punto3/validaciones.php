<?php     
   $booleano= true;

   if(empty($_GET["nombre"])){
        echo "El nombre es requerido <br>";
        $booleano= false;
    }
    if(!filter_var($_GET["email"], FILTER_VALIDATE_EMAIL) || empty($_GET["email"])){
        echo "No se ha indicado email o el formato no es correcto <br>";
        $booleano= false;
    }
    if(!filter_var($_GET["telefono"], FILTER_VALIDATE_INT) || empty($_GET["telefono"])){
        echo "No se ha indicado telefono o el formato no es correcto <br>";
        $booleano= false;
    }
    if(!filter_var($_GET["edad"], FILTER_VALIDATE_INT) || $_GET["edad"]<1 || $_GET["edad"]>100){
        echo "el formato de la edad no es correcto <br>";
        $booleano= false;
    }
    if(!filter_var($_GET["talla"], FILTER_VALIDATE_INT) || $_GET["talla"]>45 || $_GET["talla"]<20){
        echo "el formato de la talla del calzado no es correcto <br>";
        $booleano= false;
    }
    if(!filter_var($_GET["altura"], FILTER_VALIDATE_INT) || $_GET["altura"]>200 || $_GET["altura"]<100){
        echo "el formato de la altura no es correcto <br>";
        $booleano= false;
    }
    if ($_GET["color"] != "morocho" && $_GET["color"] != "rubio" && $_GET["color"] != "colorado" && $_GET["color"] != "castanio"){
        echo "No se ha indicado color de pelo(morocho,rubio,colorado,casta&ntilde;o) o el formato no es correcto <br>";
        $booleano= false;
    }
   /* $pattern="/^([0-1][0-8])[\:]([0-5][0-9])$/";
    Altura(cm): <input type="text" name="altura" minlength="2" maxlength="3" min="20" max="210" required pattern="{20,210}"><br>
   */
    $pattern="/^([0][8-9]|[1][0-7])[\:]([0-5][0-9])$/";
    if(empty($_GET["horario_turno"]) || !preg_match($pattern,$_GET["horario_turno"])){
        echo "No se ha indicado el horario o el formato no es correcto <br>";
        $booleano= false;
    }

    if ($booleano) {
        echo "SE REGISTRO EL TURNO <br>";
        echo "Gracias " . $_GET["nombre"] . " la fecha de su turno es el " . $_GET["fecha_turno"] . " a las " . $_GET["horario_turno"] . " horas. Lo esperamos <br>";
        echo "------------------------- <br>";
        echo "Nombre: " . $_GET["nombre"] . "<br>";
        echo "Email: " . $_GET["email"] . "<br>";
        echo "Telefono: " . $_GET["telefono"] . "<br>";
        echo "Fecha nacimiento: " . $_GET["fecha_nacimiento"] . "<br>";
        echo "Fecha del turno: " . $_GET["fecha_turno"] . "<br>";
        echo "Horario del turno: " . $_GET["horario_turno"] . "<br>";
    }else{
        echo "NO SE REGISTRO EL TURNO";
    }

    /* con el metodo post en la url viajan los campos
    http://localhost:8081//trabajos/tp2/punto3/validaciones.php?nombre=emanuel&email=joseemaro%40hotmail.com&telefono=5565656&edad=33&talla=45&altura=150&fecha_nacimiento=2020-03-13&color=morocho&fecha_turno=2020-03-21&horario_turno=08%3A00
    */

?>