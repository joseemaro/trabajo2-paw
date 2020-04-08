<?php
    class turno{
        public $id=0;
        public $nombre = "";
        public $email = "";
        public $telefono= "";
        public $edad = "";
        public $talla = "";
        public $altura = "";
        public $fecha_nacimiento = "";
        public $color = "";
        public $fecha_turno = "";
        public $horario = "";

        public function __construct($nom, $ema, $tel, $edad, $talla, $altura, $fecha_nacimiento, $color, $fecha_turno, $horario)
        {
            $this -> id= $ema.$fecha_turno.$horario;
            $this -> nombre = $nom;
            $this -> email = $ema;
            $this -> telefono = $tel;
            $this -> edad = $edad;
            $this -> talla = $talla;
            $this -> altura = $altura;
            $this -> fecha_nacimiento = $fecha_nacimiento;
            $this -> color = $color;
            $this -> fecha_turno = $fecha_turno;
            $this -> horario = $horario;
            
        }

        public function getTurno(){
            $turno = array(
            $this -> id,
            $this -> nombre,
            $this -> email,
            $this -> telefono,
            $this -> edad,
            $this -> talla,
            $this -> altura,
            $this -> fecha_nacimiento,
            $this -> color,
            $this -> fecha_turno,
            $this -> horario
            );
            return $turno;
        }
        

    }
?>