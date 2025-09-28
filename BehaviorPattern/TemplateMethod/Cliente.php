<?php

/**
 * Cliente
 */
class Cliente{

    private string $nombre;

    public function setName($value){
        $this->nombre = $value;
    }

    public function getName(){
        return $this->nombre;
    }
}