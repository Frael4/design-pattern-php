<?php

class SquirreManejador extends ManejadorSolicitud {

    public function manejador(string $request): ?string{
        if($request === "Nut"){
            return "Squirrel: Yo comeré la {$request} \n";
        }else {
            return parent::manejador($request);
        }
    }
}