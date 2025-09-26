<?php

class Cliente{

    var $nombre = '';

    public function setName($value){
        $this->nombre = $value;
    }

    public function getName(){
        return $this->nombre;
    }
}