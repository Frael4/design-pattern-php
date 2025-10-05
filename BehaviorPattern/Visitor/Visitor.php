<?php

include_once "ConcreteComponentA.php";
include_once "ConcreteComponentB.php";

/**
 * La interfaz de Visitor declara un conjunto de métodos de visita que corresponden a las clases de componentes.
 * 
 * La firma de un método de visita permite al visitante identificar la clase exacta del componente con el que está trabajando.
 */
interface Visitor
{
    function visitConcreteComponentA(ConcreteComponentA $concreteComponentA): void;
    function visitConcreteComponentB(ConcreteComponentB $concreteComponentB): void;
}