<?php

class Singleton {

    private static Singleton $singleton;

    private function __construct(){}

    public function getInstance(){
        /* $this::$singleton = new Singleton(); */ //No puede usar $this en Funciones estaticas instead use self
        self::$singleton = new Singleton();

        return self::$singleton;
    }
}

$var = 'Singleton';
echo $var::getInstance();