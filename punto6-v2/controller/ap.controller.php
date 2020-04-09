<?php
    namespace App\controller;

    use App\model\Appointment;
    use App\model\Serialize;

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
            $appointment->setNombre($_POST["nombre"]);
            $appointment->setEmail($_POST["email"]);
            $appointment->setTelefono($_POST["telefono"]);
            $appointment->setEdad($_POST["edad"]);
            $appointment->setTallaCalzado($_POST["talla"]);
            $appointment->setAltura($_POST["altura"]);
            $appointment->setFechaNacimiento($_POST["fecha_nacimiento"]);
            $appointment->setColorPelo($_POST["color"]);
            $appointment->setFechaTurno($_POST["fecha_turno"]);
            $appointment->setHorarioTurno($_POST["horario_turno"]);

            //hacer la persistencia
            $serialize = new Serialize();
            $serialize->serializar($appointment);
            $respuesta = $appointment->validar();
            include 'view/result.php';
        }

        public function listAp() {
            //llamar al serialize para que devuelva la lista
            $serialize = new Serialize();
            $list = $serialize->getList();
            include 'view/list.appointments.php';
        }
    }