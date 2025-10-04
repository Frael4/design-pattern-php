<?php

include_once "ConcreteStateA.php";
include_once "State.php";

class ConcreteStateB extends State
{
    function handle1(): void
    {
        echo "ConcreteStateB maneja petición 1 .\n";
    }

    function handle2(): void{
        echo "ConcreteStateB maneja la petición 2 .\n";
        echo "ConcreteStateB quiere cambiar el estado del Context.\n";
        $this->context->transitionTo(new ConcreteStateA());
        
    }
}