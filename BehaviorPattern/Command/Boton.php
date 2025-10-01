<?php

include_once "Comando.php";

/**
 * Invocador
 */
class Boton {
    // Declaramos propiedad para que se setea cualquier Clase que implemente Comando
    private Comando $comando;

    /**
     * Setea el Comando
     * @param Comando $comando
     * @return void
     */
    function setComando(Comando $comando): void {
        $this->comando = $comando;
    }
    // Accionamos 
    function presionar(): void {
        $this->comando->ejecutar();
    }
}