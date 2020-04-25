<?php
    namespace Appcontroller;

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

        public function saveAp ()
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

            $respuesta = $appointment->validar();
            $respuesta_2 = array_shift($respuesta);
            if ($respuesta_2 == "Correcto") {
                $ap = $appointment->getAp();
                include 'view/view.appointment.php';
            }
            else {
                include 'view/error.view.php';
            }
        }

        public function listAp() {
            $serialize = new Serialize();
            $list = $serialize->getList();
            include 'view/list.appointments.php';
        }

        public function viewAp() {
            $serialize = new Serialize();
            $ap = $serialize->getAp();
            include 'view/view.appointment.php';
        }
    }