<?php

namespace App\model;

class Appointment
{
    private $nombre;
    private $email;
    private $telefono;
    private $edad;
    private $talla_calzado;
    private $altura;
    private $fecha_nacimiento;
    private $color_pelo;
    private $fecha_turno;
    private $horario_turno;

    public function __construct() {
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
        if(empty($this->getFechaNacimiento())){
            $msg .= "No se ha indicado el horario o el formato no es correcto <br>";
            $booleano= false;
        }
        if (!empty($this->getColorPelo()) && ($this->getColorPelo() != "morocho" && $this->getColorPelo() != "rubio" && $this->getColorPelo() != "colorado" && $this->getColorPelo() != "castanio")){
            $msg .= "No se ha indicado color de pelo(morocho,rubio,colorado,casta&ntilde;o) o el formato no es correcto <br>";
            $booleano= false;
        }
        if(empty($this->getFechaTurno())){
            $msg .= "No se ha indicado el horario o el formato no es correcto <br>";
            $booleano= false;
        }
        $pattern="/^([0][8-9]|[1][0-7])[\:]([0-5][0-9])$/";
        if(empty($this->getHorarioTurno()) || !preg_match($pattern,$this->getHorarioTurno())){
            $msg .= "No se ha indicado el horario o el formato no es correcto <br>";
            $booleano= false;
        }

        if ($booleano) {
            $msg = "Se registró el turno <br>";
            return $msg;
        }else{
            $msg .= "No se registró el turno";
            return $msg;
        }
    }
}
