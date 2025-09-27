<?php
namespace FactoryMethod;

include_once("Vehiculo.php");
class Carro implements Vehiculo {

    public function conducir(){
        echo "Conduciendo un carro 🚗\n";
    }

}