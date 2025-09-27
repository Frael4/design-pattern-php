<?php

namespace FactoryMethod;

/**
 * Clase Fabricadora Padre
 */
abstract class FabricaVehiculo{
    
    // Factory Metodo
    public abstract function crearVehiculo() : Vehiculo;

    // Método que usa el Factory Metodo
    public function iniciarProduccion(){
        $vehiculo = $this->crearVehiculo();
        $vehiculo->conducir();
    }
}