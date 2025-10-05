<?php

include_once "Visitor.php";

class ConcreteVisitor1 implements Visitor
{
    function visitConcreteComponentA(ConcreteComponentA $concreteComponentA): void
    {
        echo $concreteComponentA->exclusiveMethodOfConcreteComponentA() . " + ConcreteVisitor1. \n";
    }

    function visitConcreteComponentB(ConcreteComponentB $concreteComponentB): void
    {
        echo $concreteComponentB->specialMethodOfConcreteComponentB() . " + ConcreteVisitor1. \n";
    }
}