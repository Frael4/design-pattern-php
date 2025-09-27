<?php
namespace FactoryMethod;

include_once("Vehiculo.php");

class Avion implements Vehiculo {

    public function conducir(){
        echo "Conduciendo un avion ✈\n";
    }
}