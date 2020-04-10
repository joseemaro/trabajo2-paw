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
            $this->getId(),
            $this->getNombre(),
            $this->getEmail(),
            $this->getTelefono(),
            $this->getEdad(),
            $this->getTallaCalzado(),
            $this->getAltura(),
            $this->getFechaNacimiento(),
            $this->getColorPelo(),
            $this->getFechaTurno(),
            $this->getHorarioTurno(),
            $this->getDiagnostico()
        );
        return $appointment;
    }

    public function validar()
    {
        $booleano = true;
        $msg = "";

        if(empty($this->getNombre())) {
            $msg = "El nombre es requerido <br>";
            $booleano= false;
        }
        if(!filter_var($this->getEmail(), FILTER_VALIDATE_EMAIL) || empty($this->email) ){
            $msg .= "No se ha indicado email o el formato no es correcto <br>";
            $booleano= false;
        }
        if(!filter_var($this->getTelefono(), FILTER_VALIDATE_INT) || empty($this->telefono)){
            $msg .= "No se ha indicado telefono o el formato no es correcto <br>";
            $booleano= false;
        }
        if(!empty($this->getEdad()) && (!filter_var($this->getEdad(), FILTER_VALIDATE_INT) || $this->getEdad() < 1 || $this->getEdad() > 100)){
            $msg .= "el formato de la edad no es correcto <br>";
            $booleano= false;
        }
        if(!empty($this->getTallaCalzado()) && (!filter_var($this->getTallaCalzado(), FILTER_VALIDATE_INT) || $this->getTallaCalzado() > 60 || $this->getTallaCalzado() < 20)){
            $msg .= "el formato de la talla del calzado no es correcto <br>";
            $booleano= false;
        }
        if(!empty($this->getAltura()) && (!filter_var($this->getAltura(), FILTER_VALIDATE_INT) || $this->getAltura() > 200 || $this->getAltura() < 100)){
            $msg .= "el formato de la altura no es correcto <br>";
            $booleano= false;
        }
        //falta validar
        if(empty($this->getFechaNacimiento())){
            $msg .= "No se ha indicado la fecha de nacimiento o el formato no es correcto <br>";
            $booleano= false;
        }
        if (!empty($this->getColorPelo()) && ($this->getColorPelo() != "morocho" && $this->getColorPelo() != "rubio" && $this->getColorPelo() != "colorado" && $this->getColorPelo() != "castanio")){
            $msg .= "No se ha indicado color de pelo(morocho,rubio,colorado,casta&ntilde;o) o el formato no es correcto <br>";
            $booleano= false;
        }
        //falta validar
        if(empty($this->getFechaTurno())){
            $msg .= "No se ha indicado el horario o el formato no es correcto <br>";
            $booleano= false;
        }
        $pattern="/^([0][8-9]|[1][0-7])[\:]([0-5][0-9])$/";
        if(empty($this->getHorarioTurno()) || !preg_match($pattern,$this->getHorarioTurno())){
            $msg .= "No se ha indicado la fecha del turno o el formato no es correcto <br>";
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
            $target_dir = __DIR__ . "\..\uploads\\";

            $extension = $_FILES["diagnostico"]["type"];
            if ($extension != 'image/png' && $extension != 'image/jpg' && $extension != 'image/jpeg') {
                $msg = "Solo se permite archivos con extensión JPG y PNG.<br>";
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

            $msg = "Se registró el turno <br>";
            $msg .= "Gracias " . $this->getNombre() . " la fecha de su turno es el " . $this->getFechaTurno() . " a las " . $this->getHorarioTurno() . " horas. Lo esperamos <br>";
            $msg .= "----------------------------------------------------------------------------------------------------------------------------- <br>";
            $msg .= "Turno: " . $this->getId() . "<br>";
            $msg .= "Nombre: " . $this->getNombre() . "<br>";
            $msg .= "Email: " . $this->getEmail() . "<br>";
            $msg .= "Telefono: " . $this->getTelefono() . "<br>";
            $msg .= "Edad: " . $this->getEdad() . "<br>";
            $msg .= "Talla de calzado: " . $this->getTallaCalzado() . "<br>";
            $msg .= "Altura: " . $this->getAltura() . "<br>";
            $msg .= "Fecha nacimiento: " . $this->getFechaNacimiento() . "<br>";
            $msg .= "Color de pelo: " . $this->getColorPelo() . "<br>";
            $msg .= "Diagnostico: " . $this->getDiagnostico() . "<br>";

            return $msg;
        }else{
            $msg .= "No se registró el turno";
            return $msg;
        }
    }
}
