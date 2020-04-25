<?php

namespace App\model;

use App\model\Appointment;
use App\model\Appointment_List;

class Serialize {

    public function __construct()
    {
    }

    public function serializar($appointment) {
        $dir = __DIR__ . "/appointmets.json";

        $list = new Appointment_List();


        if (file_exists($dir)) {
            $file = file_get_contents($dir);

            if (!empty($file)){
                $json = json_decode($file, true);
                foreach ($json as $ap){
                    foreach($ap as $ap){
                        $newAp = new Appointment();
                        $newAp->setId($ap['id']);
                        $newAp->setNombre($ap['nombre']);
                        $newAp->setEmail($ap['email']);
                        $newAp->setTelefono($ap['telefono']);
                        $newAp->setEdad($ap['edad']);
                        $newAp->setTallaCalzado($ap['talla_calzado']);
                        $newAp->setAltura($ap['altura']);
                        $newAp->setFechaNacimiento($ap['fecha_nacimiento']);
                        $newAp->setColorPelo($ap['color_pelo']);
                        $newAp->setFechaTurno($ap['fecha_turno']);
                        $newAp->setHorarioTurno($ap['horario_turno']);
                        $newAp->setDiagnostico($ap['diagnostico']);
                        $list->addAp($newAp);
                    }
                }
            }
        }
        $list -> addAp($appointment);

        $json_string = json_encode($list);
        $arch = fopen ($dir, "w+");
        fwrite($arch, $json_string);
        fclose($arch);
    }

    public function getList() {
        $dir = __DIR__ . "/appointmets.json";

        if (file_exists($dir)) {
            $file = file_get_contents($dir);
            $json = json_decode($file, true);
            return $json;
        }
        else {
            return null;
        }
    }

    public function getAp() {
        $id = $_GET['id'];
        $list = $this->getList();
        if (!is_null($list)){
            foreach ($list as $json) {
                foreach ($json as $ap) {
                    if ($ap['id'] == $id) {
                        return $ap;
                    }
                }
            }
        } else {
            return null;
        }
    }

}