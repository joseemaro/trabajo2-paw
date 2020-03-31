<?php

/**
 * @param string $directorio_destino Directorio de destino dónde queremos dejar el archivo
 * @param string $nombre_fichero Atributo 'Name' del campo archivo
 * @return boolean
 */
function subir_fichero($directorio_destino, $nombre_fichero)
{
    echo "entre a validar la";
    $img_type = $_FILES[$nombre_fichero]['type'];
    // Si se trata de una imagen   
    if (((strpos($img_type, "gif") || strpos($img_type, "jpeg") ||strpos($img_type, "jpg")) || strpos($img_type, "png")))
    {      
        return true;
    }else{
        //Si llegamos hasta aquí es que algo ha fallado
        return false;
    }
}
?>