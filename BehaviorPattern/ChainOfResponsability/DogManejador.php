<?php
include_once "ManejadorSolicitud.php";

class DogManejador extends ManejadorSolicitud {

    /**
     * 
     * @param string $request
     * @return string|null
     */
    public function manejador(string $request): ?string{

        if($request === "MeatBall"){
            return "Dog: Yo comeré la {$request} \n";
        }
        else {
            return parent::manejador($request);
        }
    }
}