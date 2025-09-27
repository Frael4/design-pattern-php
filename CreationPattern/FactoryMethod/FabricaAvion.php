<?php
namespace FactoryMethod;

ini_set('display_errors', 1);

include_once("FabricaVehiculo.php");
include_once("Avion.php");

class FabricaAvion extends FabricaVehiculo {
    public function crearVehiculo(): Vehiculo{
        return new Avion();
    }
}

$fabricaAvion = new FabricaAvion();

$fabricaAvion->iniciarProduccion();