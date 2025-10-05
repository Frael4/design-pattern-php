<?php

include_once "Component.php";

class ConcreteComponentA implements Component
{
    function accept(Visitor $visitor): void
    {
        $visitor->visitConcreteComponentA($this);
    }

    function exclusiveMethodOfConcreteComponentA(): string
    {
        return "A";
    }
}