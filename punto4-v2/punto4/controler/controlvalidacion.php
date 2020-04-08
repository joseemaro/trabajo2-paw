<?php
    $bol=false;

    //require_once("../model/validarimagen.php");

    //veo si no ingreso imagen
    if(!empty($_POST["archivo"])){
        //esto devuelve 2 si es jpg o 3 si es png
        $tipo = exif_imagetype("archivo");
        if($tipo==3 || $tipo==2){
            //si es una imagen valida
            $bol = true;
        }


        /*
        if (subir_fichero('../',"archivo"))
            $bol= true;
          // echo 'Archivo recibido correctamente';*/
  }

    if ($bol) {
    require_once("../modelo/validar.php");
    $val= new validar();
    $respuesta = $val-> validarr();

    require_once("../vista/resultado.php");
    $re = new res();
    $resp = $re ->mostrarResultado($respuesta); 
    }else{
        require_once("../vista/resultado.php");
        $re = new res();
        $respuesta= "hubo un error en la carga de la imagen";
        $resp = $re ->mostrarResultado($respuesta);  
    }

?>