<?php

include_once "Target.php";
include_once "Adaptee.php";

/**
 * El `Adapter` hace que la interfaz del `Adaptee` sea compatible con la interfaz del `Target`.
 */
class Adapter extends Target
{
    /**
     * @var Adaptee
     */
    private $adaptee;

    function __construct(Adaptee $adaptee)
    {
        $this->adaptee = $adaptee;
    }

    public function request(): string
    {
        // Retorna el string reverso
        return "Adapter: (TRADUCCION) " . strrev($this->adaptee->specificRequest());
    }
}