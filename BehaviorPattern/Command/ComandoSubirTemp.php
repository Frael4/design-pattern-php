<?php

include_once "Comando.php";
include_once "Termostato.php";

/**
 * Implementa Comando
 */
class ComandoSubirTemp implements Comando {

    // Propiedad receptora
    private Termostato $termostato;

    // Constructor
    function __construct(Termostato $termostato){
        $this->termostato = $termostato;
    }

    /**
     * Sobreescribimos el metodo de Comando
     * @return void
     */
    function ejecutar(): void{
        $this->termostato->subirTemperatura();
        $this->termostato->bajarTemperatura();
    }
}