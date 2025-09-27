<?php

namespace FactoryMethod;
abstract class FabricaVehiculo{
    
    // Factory Metodo
    public abstract function crearVehiculo() : Vehiculo;

    public function iniciarProduccion(){
        $vehiculo = $this->crearVehiculo();
        $vehiculo->conducir();
    }
}