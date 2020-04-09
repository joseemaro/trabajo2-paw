   
<?php
    require_once("listaTurnos.php");
    require_once("turno.php");
    class serializar{
        
        //guardar en el archivo
        public function guardar($turno){   
        
        //CREO UNA LISTA DE TURNOS Y AGREGO EL CREADO    
        $lista = new listaTurnos();
        $lista -> addTurnos($turno);

        //OBTENGO LA LISTA DE TURNOS ALMACENADA EN EL ARCHIVO
        $s = file_get_contents('../datos.json');
        if (!empty($s)){
            $ss = json_decode($s, true);
            foreach ($ss as $turn){
                foreach($turn as $arr){
                    $nuevoTurno = new turno(
                        $arr['nombre'],
                        $arr['email'],
                        $arr['telefono'],
                        $arr['edad'],
                        $arr['talla'],
                        $arr['altura'],
                        $arr['fecha_nacimiento'],
                        $arr['color'],
                        $arr['fecha_turno'],
                        $arr['horario']);
                    //AGREGO LOS TURNOS RECUPERADOS A LA LISTA    
                    $lista -> addTurnos($nuevoTurno);
                }
                
            }
        }
        //borrar archivo
        $arch="";
        chmod("../datos.json", 755);
        // variable $arc está vacia
        $arch = fopen ("../datos.json", "w+");
        fwrite($arch, "");
        fclose($arch);
        
        //ALMACENO LA LISTA DE TURNOS NUEVAMENTE EN EL ARCHIVO
        $json_string = json_encode($lista); 
        file_put_contents('../datos.json', $json_string); 
;        }

        //recuperar del archivo
        public function obtener(){
            $s = file_get_contents('../datos.json');
            var_dump(json_decode($s, true));
            return $s;
        }
    }


?>