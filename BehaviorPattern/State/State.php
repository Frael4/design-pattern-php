<?php

include_once "Context.php";

/**
 * La clase base Estado declara métodos que todos los Estados Concretos deben implementar y 
 * también proporciona una retrorreferencia al objeto Contexto, asociado con el Estado. 
 * Esta retrorreferencia puede ser utilizada por los Estados para realizar la transición del Contexto a otro Estado.
 */
abstract class State
{
    /**
     * @var Context
     */
    protected $context;

    function setContext(Context $context)
    {
        $this->context = $context;
    }

    abstract public function handle1() : void;
    abstract public function handle2() : void;
}