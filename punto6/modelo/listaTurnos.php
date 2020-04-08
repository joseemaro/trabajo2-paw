<?php
    class listaTurnos{
        public $array;

        function __construct()
        {
            $this -> array = [];
          // $s = file_get_contents('../datos.json'); 
            /*if (!empty($s)){
             $jsonIterator = new RecursiveIteratorIterator(
                 new RecursiveArrayIterator(json_decode($s, TRUE)),
                 RecursiveIteratorIterator::SELF_FIRST);
               
             foreach ($jsonIterator as $key => $val) {
                $this -> addTurnos($val);                    
             }
            
            }*/


        }

        public function addTurnos($turno){
            //echo "agregando turno" . $turno;
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