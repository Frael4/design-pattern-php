<?php

/**
* La interfaz Strategy declara operaciones comunes a todas las versiones compatibles
* de algún algoritmo.
*
* El Contexto utiliza esta interfaz para llamar al algoritmo definido por las Estrategias Concretas.
*/
interface Strategy
{
    function doAlgorithm(array $data): array;
}