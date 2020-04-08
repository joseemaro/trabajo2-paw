<?php
    require_once("../modelo/validar.php");
    require_once("../vista/resultado.php");
    
    //VALIDO EL TURNO
    $val= new validar();
    //EN RESPUESTA ESTA EL RESULTADO DE LA CONSULTA
    $respuesta = $val-> validarr();

    mostrarResultado($respuesta);


?>