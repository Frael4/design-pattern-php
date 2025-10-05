<?php

include_once "Strategy.php";

/**
 * El contexto define la interfaz de interés para los clientes
 */
class Context
{
    /**
     * @var Strategy
     */
    private $strategy;

    function __construct(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    function setStrategy(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    function doSomeBusinessLogic(): void
    {
        echo "Context: Ordenando el array usando la ". get_class($this->strategy). ". \n ";
        $result = $this->strategy->doAlgorithm(["b", "a", "d", "c", "e"]);
        // Une los elementos de un array y devuelve el String
        echo implode(",", $result) . "\n";
    }
}