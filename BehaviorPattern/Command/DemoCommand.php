<?php

ini_set("display_errors", 1);

include_once "Termostato.php";
include_once "ComandoSubirTemp.php";
include_once "Boton.php";

$termostato = new Termostato();
// Creacion del objeto ComandoSubirTemp para que realice la acción
$comandoSubirTemp = new ComandoSubirTemp($termostato);

// Objeto encargado de accionar el comando
$boton = new Boton();
// Le pasamos el comando que queremos que se ejecute
$boton->setComando($comandoSubirTemp);
$boton->presionar();