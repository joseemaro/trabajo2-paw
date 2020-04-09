<?php

namespace App\model;

use App\model\Appointment;
use App\model\Appointment_List;

class Serialize {

    public function __construct()
    {
    }

    public function serializar($appointment) {
        $dir = __DIR__ . "\\appointmets.json";

        //CREO UNA LISTA DE TURNOS Y AGREGO EL CREADO
        $list = new Appointment_List();
        $list -> addAp($appointment);

        //OBTENGO LA LISTA DE TURNOS ALMACENADA EN EL ARCHIVO
        $file = file_get_contents($dir);

        if (!empty($file)){
            $json = json_decode($file, true);
            foreach ($json as $ap){
                foreach($ap as $arr){
                    $newAp = new Appointment();
                    $newAp->setNombre($arr['nombre']);
                    $newAp->setEmail($arr['email']);
                    $newAp->setTelefono($arr['telefono']);
                    $newAp->setEdad($arr['edad']);
                    $newAp->setTallaCalzado($arr['talla']);
                    $newAp->setAltura($arr['altura']);
                    $newAp->setFechaNacimiento($arr['fecha_nacimiento']);
                    $newAp->setColorPelo($arr['color']);
                    $newAp->setFechaTurno($arr['fecha_turno']);
                    $newAp->setHorarioTurno($arr['horario']);
                    //AGREGO LOS TURNOS RECUPERADOS A LA LISTA
                    $list->addAp($newAp);
                }
            }
        }

        //borrar archivo
        $arch="";
        chmod($dir, 755);
        // variable $arc está vacia
        $arch = fopen ($dir, "w+");
        fwrite($arch, "");
        fclose($arch);

        //ALMACENO LA LISTA DE TURNOS NUEVAMENTE EN EL ARCHIVO
        $json_string = json_encode($list);
        file_put_contents($dir, $json_string);
    }

    public function getList() {
        $dir = __DIR__ . "\\appointmets.json";

        $file = file_get_contents($dir);
        $json = json_decode($file, true);
        $list = new Appointment_List();
        foreach ($json as $ap){
            foreach($ap as $arr){
                $newAp = new Appointment();
                $newAp->setNombre($arr['nombre']);
                $newAp->setEmail($arr['email']);
                $newAp->setTelefono($arr['telefono']);
                $newAp->setEdad($arr['edad']);
                $newAp->setTallaCalzado($arr['talla']);
                $newAp->setAltura($arr['altura']);
                $newAp->setFechaNacimiento($arr['fecha_nacimiento']);
                $newAp->setColorPelo($arr['color']);
                $newAp->setFechaTurno($arr['fecha_turno']);
                $newAp->setHorarioTurno($arr['horario']);
                //AGREGO LOS TURNOS RECUPERADOS A LA LISTA
                $list->addAp($newAp);
            }
        }
        var_dump(json_decode($file, true));
        return $list;
        //return $file;
    }

}