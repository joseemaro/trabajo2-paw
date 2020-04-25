<?php

namespace App\model;

use App\model\Serialize;

class Appointment
{
    public $id;
    public $nombre;
    public $email;
    public $telefono;
    public $edad;
    public $talla_calzado;
    public $altura;
    public $fecha_nacimiento;
    public $color_pelo;
    public $fecha_turno;
    public $horario_turno;
    public $diagnostico;

    public function __construct() {
        $this->setId(uniqid());
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * @param mixed $telefono
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    /**
     * @return mixed
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * @param mixed $edad
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;
    }

    /**
     * @return mixed
     */
    public function getTallaCalzado()
    {
        return $this->talla_calzado;
    }

    /**
     * @param mixed $talla_calzado
     */
    public function setTallaCalzado($talla_calzado)
    {
        $this->talla_calzado = $talla_calzado;
    }

    /**
     * @return mixed
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * @param mixed $altura
     */
    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    /**
     * @return mixed
     */
    public function getFechaNacimiento()
    {
        return $this->fecha_nacimiento;
    }

    /**
     * @param mixed $fecha_nacimiento
     */
    public function setFechaNacimiento($fecha_nacimiento)
    {
        $this->fecha_nacimiento = $fecha_nacimiento;
    }

    /**
     * @return mixed
     */
    public function getColorPelo()
    {
        return $this->color_pelo;
    }

    /**
     * @param mixed $color_pelo
     */
    public function setColorPelo($color_pelo)
    {
        $this->color_pelo = $color_pelo;
    }

    /**
     * @return mixed
     */
    public function getFechaTurno()
    {
        return $this->fecha_turno;
    }

    /**
     * @param mixed $fecha_turno
     */
    public function setFechaTurno($fecha_turno)
    {
        $this->fecha_turno = $fecha_turno;
    }

    /**
     * @return mixed
     */
    public function getHorarioTurno()
    {
        return $this->horario_turno;
    }

    /**
     * @param mixed $horario_turno
     */
    public function setHorarioTurno($horario_turno)
    {
        $this->horario_turno = $horario_turno;
    }

    /**
     * @return mixed
     */
    public function getDiagnostico()
    {
        return $this->diagnostico;
    }

    /**
     * @param mixed $diagnostico
     */
    public function setDiagnostico($diagnostico)
    {
        $this->diagnostico = $diagnostico;
    }

    public function getAp()
    {
        $appointment = array(
            'id' => $this->getId(),
            'nombre' => $this->getNombre(),
            'email' => $this->getEmail(),
            'telefono' => $this->getTelefono(),
            'edad' => $this->getEdad(),
            'talla_calzado' => $this->getTallaCalzado(),
            'altura' => $this->getAltura(),
            'fecha_nacimiento' => $this->getFechaNacimiento(),
            'color_pelo' => $this->getColorPelo(),
            'fecha_turno' => $this->getFechaTurno(),
            'horario_turno' => $this->getHorarioTurno(),
            'diagnostico' => $this->getDiagnostico()
        );
        return $appointment;
    }

    public function validar()
    {
        $booleano = true;
        $msg = array();

        $name = trim($this->getNombre());
        if ($name !== '') {
            $pattern = '/^[a-zA-Z, ]*$/';
            if (!(preg_match($pattern, $name))) {
                $error = "El formato del nombre no es correcto";
                array_push($msg, $error);
                $booleano= false;
            }
        } else {
            $error = "El nombre es requerido";
            array_push($msg, $error);
            $booleano= false;
        }
        if(!filter_var($this->getEmail(), FILTER_VALIDATE_EMAIL) || empty($this->email) ){
            $error = "No se ha indicado email o el formato no es correcto";
            array_push($msg, $error);
            $booleano= false;
        }
        if(!filter_var($this->getTelefono(), FILTER_VALIDATE_INT) || empty($this->telefono)){
            $error = "No se ha indicado telefono o el formato no es correcto";
            array_push($msg, $error);
            $booleano= false;
        }
        if(!empty($this->getEdad()) && (!filter_var($this->getEdad(), FILTER_VALIDATE_INT) || $this->getEdad() < 1 || $this->getEdad() > 100)){
            $error = "El formato de la edad no es correcto";
            array_push($msg, $error);
            $booleano= false;
        }
        if(!empty($this->getTallaCalzado()) && (!filter_var($this->getTallaCalzado(), FILTER_VALIDATE_INT) || $this->getTallaCalzado() > 60 || $this->getTallaCalzado() < 20)){
            $error = "El formato de la talla del calzado no es correcto";
            array_push($msg, $error);
            $booleano= false;
        }
        if(!empty($this->getAltura()) && (!filter_var($this->getAltura(), FILTER_VALIDATE_INT) || $this->getAltura() > 200 || $this->getAltura() < 100)){
            $error = "El formato de la altura no es correcto";
            array_push($msg, $error);
            $booleano= false;
        }
        if(empty($this->getFechaNacimiento())){
            $error = "No se ha indicado la fecha de nacimiento o el formato no es correcto";
            array_push($msg, $error);
            $booleano= false;
        }
        if (!empty($this->getColorPelo()) && ($this->getColorPelo() != "morocho" && $this->getColorPelo() != "rubio" && $this->getColorPelo() != "colorado" && $this->getColorPelo() != "castanio")){
            $error = "No se ha indicado color de pelo(morocho,rubio,colorado,casta&ntilde;o) o el formato no es correcto";
            array_push($msg, $error);
            $booleano= false;
        }

        $pattern="/^([0][8-9]|[1][0-7])[\:]([0-5][0-9])$/";
        if (empty($this->getHorarioTurno()) || !preg_match($pattern,$this->getHorarioTurno()))
        {
            $error = "No se ha indicado el horario o el formato no es correcto";
            array_push($msg, $error);
            $booleano= false;
        }
        if(empty($this->getFechaTurno())){
            $error = "No se ha indicado la fecha del turno o el formato no es correcto";
            array_push($msg, $error);
            $booleano= false;
        }

        /*
            array(1) {
              ["diagnostico"]=> array(5) {
                                ["name"]=> string(31) "http-request-response-basic.png"
                                ["type"]=> string(9) "image/png" <- COMPAREN CONTRA ESTE CAMPO
                                ["tmp_name"]=> string(14) "/tmp/phpeiU9V1"
                                ["error"]=> int(0)
                                ["size"]=> int(20064)
                            }
            }
        */

        if (!empty($_FILES["diagnostico"]["name"])) {
            $target_dir = __DIR__ . "/../uploads/";

            $extension = $_FILES["diagnostico"]["type"];
            if ($extension != 'image/png' && $extension != 'image/jpg' && $extension != 'image/jpeg') {
                $error = "Solo se permite archivos con extensión JPG y PNG.";
                array_push($msg, $error);
                $booleano = false;
            }
            $actual_name = $_FILES["diagnostico"]["name"];

            $i = 0;
            while (file_exists($target_dir . $i . '_' . $actual_name)) {
                $i++;
            }
            $actual_name = $i . '_' . $actual_name;

            if ($booleano){
                if (! is_dir($target_dir))
                    mkdir ($target_dir);
                $this->setDiagnostico($actual_name);
                $name = $target_dir . $actual_name;
                if (!move_uploaded_file($_FILES["diagnostico"]["tmp_name"], $name)) {
                    throw new Exception (("No se pudo mover el archivo $actual_name a $name|Could not move $actual_name to $name"));
                }
            }
        }

        if ($booleano) {
            $serialize = new Serialize();
            $serialize->serializar($this);

            $error = "Correcto";
            array_push($msg, $error);

            return $msg;
        }else{
            array_unshift($msg, "Incorrecto");
            return $msg;
        }
    }
}
