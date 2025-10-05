<?php

include_once "Component.php";

class ConcreteComponentB implements Component
{
    function accept(Visitor $visitor): void
    {
        $visitor->visitConcreteComponentB($this);
    }

    function specialMethodOfConcreteComponentB(): string
    {
        return "B";
    }
}