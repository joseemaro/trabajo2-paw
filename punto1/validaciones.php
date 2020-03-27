<?php     
   
   if(empty($_POST["nombre"])){
        echo "El nombre es requerido <br>";
    }
    if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) || empty($_POST["email"])){
        echo "No se ha indicado email o el formato no es correcto <br>";
    }
    if(!filter_var($_POST["telefono"], FILTER_VALIDATE_INT) || empty($_POST["telefono"])){
        echo "No se ha indicado telefono o el formato no es correcto <br>";
    }
    if(!filter_var($_POST["edad"], FILTER_VALIDATE_INT) || empty($_POST["edad"]) || $_POST["edad"]<1 || $_POST["edad"]>100){
        echo "No se ha indicado la edad o el formato no es correcto <br>";
    }
    if(!filter_var($_POST["talla"], FILTER_VALIDATE_INT) || empty($_POST["talla"])){
        echo "No se ha indicado la talla del calzado o el formato no es correcto <br>";
    }
    if(!filter_var($_POST["altura"], FILTER_VALIDATE_INT) || empty($_POST["altura"]) || $_POST["altura"]>220 || $_POST["altura"]<20){
        echo "No se ha indicado la altura o el formato no es correcto <br>";
    }
    if ($_POST["color"] != "morocho" && $_POST["color"] != "rubio" && $_POST["color"] != "colorado" && $_POST["color"] != "casta&ntilde;o"){
        echo "No se ha indicado color de pelo(morocho,rubio,colorado,casta&ntilde;o) o el formato no es correcto <br>";
    }
    $pattern="/^([0-1][0-9]|[2][0-3])[\:]([0-5][0-9])$/";
    if(empty($_POST["horario_turno"]) || !preg_match($pattern,$_POST["horario_turno"])){
        echo "No se ha indicado el horario o el formato no es correcto <br>";
    }




?>