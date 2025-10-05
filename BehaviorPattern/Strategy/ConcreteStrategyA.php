<?php
include_once "Strategy.php";

class ConcreteStrategyA implements Strategy
{
    function doAlgorithm(array $data): array{
        // Ordena por referencia
        sort($data);

        return $data;
    }
}