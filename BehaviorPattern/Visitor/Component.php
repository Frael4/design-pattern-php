<?php

include_once "Visitor.php";

/**
 * La interfaz Component declara un método `accept` que debe tomar la interfaz base del visitante como argumento.
 */
interface Component
{
    function accept(Visitor $visitor): void;
}