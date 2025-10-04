<?php

ini_set("display_errors", 1);

include_once "Originador.php";
include_once "Cuidador.php";

$originador = new Originador("Super-duper-mega-puper-hiper-guper");
$cuidador = new Cuidador($originador);

// Respaldamos los estados y hacemos algo importante x3
$cuidador->backup();
$originador->doSomething();

$cuidador->backup();
$originador->doSomething();

$cuidador->backup();
$originador->doSomething();

echo "\n Cliente: Mostramos historial. \n";
$cuidador->showHistory();

echo "Cliente: Ahora hacemos un rollback: \n";
$cuidador->undo();

echo "\n Cliente: Mostramos historial otra vez. \n";
$cuidador->showHistory();