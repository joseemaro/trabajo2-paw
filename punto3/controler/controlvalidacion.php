<?php
    //include 'modelo/validar.php';
    require_once("../modelo/validar.php");

    $val= new validar();
    $respuesta = $val-> validarr();
    echo $respuesta;
?>