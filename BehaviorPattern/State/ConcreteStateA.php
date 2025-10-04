<?php

include_once "ConcreteStateB.php";
include_once "State.php";

class ConcreteStateA extends State
{
    function handle1(): void
    {
        echo "ConcreteStateA maneja la petición 1 .\n";
        echo "ConcreteStateA quiere cambiar el estado del Context.\n";
        $this->context->transitionTo(new ConcreteStateB());
    }

    function handle2(): void{
        echo "ConcreteStateA maneja petición 2 .\n";
    }
}