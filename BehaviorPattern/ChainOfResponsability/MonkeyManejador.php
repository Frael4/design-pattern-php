<?php

class MonkeyManejador extends ManejadorSolicitud {

    public function manejador(string $request): ?string{
        if($request === "Banana"){
            return "Monkey: Yo comeré la {$request} \n";
        } else {
            return parent::manejador($request);
        }
    }
}