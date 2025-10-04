<?php

include_once "Originador.php";
include_once "Memento.php";

/**
 * El Cuidador no depende de la clase ConcreteMemento. 
 * Por lo tanto, no tiene acceso al estado del originador, almacenado dentro del memento. 
 * Funciona con todos los mementos a través de la interfaz base de Memento.
 */
class Cuidador
{

    /**
     * @var Memento[]
     */
    private $mementos = [];

    /**
     * @var Originador
     */
    private $originador;

    function __construct(Originador $originador)
    {
        $this->originador = $originador;
    }

    /**
     * Respalda el estado del Originador
     * @return void
     */
    function backup(): void
    {
        echo "\n Cuidador: Guardando el estado del Originador. \n";
        $this->mementos[] = $this->originador->save();
    }

    function undo(): void
    {
        // Si no hay mementos
        if (!count($this->mementos)) {
            return;
        }
        // Sacamos un memento
        $memento = array_pop($this->mementos);

        echo "Cuidador: Restaurando estado a {$memento->getState()} \n";

        try {
            $this->originador->restore($memento);
        } catch (\Exception $e) {
            echo "{$e->getMessage()}";
            $this->undo();
        }
    }

    /**
     * Muestra la lista de Mementos
     * @return void
     */
    function showHistory(): void
    {
        echo "Cuidador: Aqui esta la lista de los mementos: \n";

        foreach ($this->mementos as $m) {
            echo $m->getName() . "\n";
        }
    }

}