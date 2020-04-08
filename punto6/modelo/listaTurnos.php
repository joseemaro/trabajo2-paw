<?php
    class listaTurnos{
        public $array;

        function __construct()
        {
            $this -> array = [];
        }

        public function addTurnos($turno){
            array_push( $this -> array, $turno);
        }

        public function getTotal(){
            $total=0;
            foreach($this-> array as $ar) {
                $total+= $ar-> getTurno();
            }
            return $total;
        }
    }

?>