<?php

include_once "State.php";

/**
 * El Contexto define la interfaz de interés para los clientes. También mantiene una
 * referencia a una instancia de una subclase de Estado, que representa el estado actual
 * del Contexto.
 */
class Context
{

    /**
     * @var State referencia al estado actual del contexto
     */
    private $state;

    /**
     * Summary of __construct
     * @param State $state
     */
    function __construct(State $state)
    {
        // $this->state = $state;
        $this->transitionTo($state);
    }

    /**
     * Permite cambiar al Contexto el objeto Estado en tiempo de ejecución
     * @param State $state
     * @return void
     */
    function transitionTo(State $state): void
    {
        echo "Context: Transición a " . get_class($state) . ".\n";
        $this->state = $state;
        $this->state->setContext($this);
        echo "Context: Actual estado " . get_class($this->state) . ".\n";
    }

    // El Context delega parte de su comportamiento al actual objeto State
    function request1(): void
    {
        $this->state->handle1();
    }

    function request2(): void
    {
        $this->state->handle2();
    }
}