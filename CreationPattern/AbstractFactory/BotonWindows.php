<?php

include_once("Boton.php");

/**
 * 
 * Clase constructora de botones para Windows
 */
class BotonWindows implements Boton{
    function pintar(){
        echo "Pintando boton en Windows ✅ \n";
    }
}