<?php

ini_set('display_errors', 1);

include_once("FabricaWindows.php");

// Uso por el Cliente
$fabrica = new FabricaWindows();

$boton = $fabrica->crearBoton();

$ventana = $fabrica->crearVentana();


$boton->pintar();
$ventana->mostrar();