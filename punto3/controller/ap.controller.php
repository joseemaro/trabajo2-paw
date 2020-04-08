<?php
namespace App\controller;
use App\model\Appointment;

class ApController
{
    public function index()
    {
        include 'view/index.view.php';
    }

    public  function newAp() {
        include 'view/new.appointment.php';
    }
    public function save ()
    {
        $appointment = new Appointment();
        $appointment->setNombre($_GET["nombre"]);
        $appointment->setEmail($_GET["email"]);
        $appointment->setTelefono($_GET["telefono"]);
        $appointment->setEdad($_GET["edad"]);
        $appointment->setTallaCalzado($_GET["talla"]);
        $appointment->setAltura($_GET["altura"]);
        $appointment->setFechaNacimiento($_GET["fecha_nacimiento"]);
        $appointment->setColorPelo($_GET["color"]);
        $appointment->setFechaTurno($_GET["fecha_turno"]);
        $appointment->setHorarioTurno($_GET["horario_turno"]);

        $respuesta = $appointment->validar();
        include 'view/result.php';
    }

}