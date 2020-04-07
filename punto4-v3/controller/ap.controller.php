<?php
    //include 'model/ap.model.php';
    namespace App\controller;
    use App\model\Appointment;

    class ApController
    {
        //public $appointment;
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
            $appointment->setNombre($_POST["nombre"]);
            $appointment->setEmail($_POST["email"]);
            $appointment->setTelefono($_POST["telefono"]);
            $appointment->setEdad($_POST["edad"]);
            $appointment->setTallaCalzado($_POST["talla"]);
            $appointment->setAltura($_POST["altura"]);
            $appointment->setColorPelo($_POST["color"]);
            $appointment->setHorarioTurno($_POST["horario_turno"]);

            $respuesta = $appointment->validar();
            include 'view/index.view.php';
            /*echo $respuesta;*/
        }

    }