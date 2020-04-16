<?php

namespace App\model;

class Appointment_List{
    public $list;

    function __construct()
    {
        $this->list = [];
    }

    public function addAp($appointment){
        array_push( $this->list, $appointment);
    }

    public function getTotal(){
        $total = 0;
        foreach($this->list as $ap) {
            $total+= $ap->getAp();
        }
        return $total;
    }
}