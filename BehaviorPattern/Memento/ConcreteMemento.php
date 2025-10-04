<?php

include_once "Memento.php";

/**
 * Contiene la infraestructura para almacenar el estado del Originado
 */
class ConcreteMemento implements Memento
{

    private $state;

    private $date;

    function __construct(string $state)
    {
        $this->state = $state;
        $this->date = date('Y-m-d H:i:s');
    }

    function getState(): string
    {
        return $this->state;
    }

    function getDate(): string
    {
        return $this->date;
    }

    function getName(): string
    {
        return "{$this->date} / ( ".substr($this->state, 0, 9) . " .. )";
    }
}