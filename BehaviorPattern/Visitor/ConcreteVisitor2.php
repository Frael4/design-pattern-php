<?php

include_once "Visitor.php";

class ConcreteVisitor2 implements Visitor
{
    function visitConcreteComponentA(ConcreteComponentA $concreteComponentA): void
    {
        echo $concreteComponentA->exclusiveMethodOfConcreteComponentA() . " + ConcreteVisitor2. \n";
    }

    function visitConcreteComponentB(ConcreteComponentB $concreteComponentB): void
    {
        echo $concreteComponentB->specialMethodOfConcreteComponentB() . " + ConcreteVisitor2. \n";
    }
}