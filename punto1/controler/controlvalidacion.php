<?php
    //include 'modelo/validar.php';
    require_once("../modelo/validar.php");

    require_once("../vista/resultado.php");
   
    //valido campos
    $val= new validar();
    $respuesta = $val-> validarr();
    //muetro respusta
    $re = new res();
    $resp = $re ->mostrarResultado($respuesta); 
    //echo $respuesta;
?>