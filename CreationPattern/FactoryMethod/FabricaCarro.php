<?php

namespace FactoryMethod;

ini_set('display_errors', 1);

include_once("FabricaVehiculo.php");
include_once("Carro.php");

/**
 * Implementación del patrón
 */
class FabricaCarro extends FabricaVehiculo {

    public function crearVehiculo(): Vehiculo{
        return new Carro();
    }
}
// Instanciamos una fabrica de carros

$fabricaCarro = new FabricaCarro();
// Iniciamos su producción
$fabricaCarro->iniciarProduccion();
