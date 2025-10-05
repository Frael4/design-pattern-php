<?php

include_once "Strategy.php";

class ConcreteStrategyB implements Strategy
{

    function doAlgorithm(array $data): array
    {
        // Orderna en reversa por referencia
        rsort($data);

        return $data;
    }
}