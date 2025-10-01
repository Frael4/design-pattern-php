<?php

ini_set('display_errors', 1);

include_once "ManejadorSolicitud.php";
include_once "MonkeyManejador.php";
include_once "SquirreManejador.php";
include_once "DogManejador.php";

function clientCode(ManejadorSolicitud $handler)
{
    foreach (["Nut", "Banana", "Cup of coffee", "MeatBall"] as $food) {
        echo "Client: Who wants a " . $food . "?\n";
        $result = $handler->manejador($food);
        if ($result) {
            echo "  " . $result;
        } else {
            echo "  " . $food . " was left untouched.\n";
        }
    }
}

$monkey = new MonkeyManejador();
$squirrel = new SquirreManejador();
$dog = new DogManejador();

$monkey->setSiguiente($squirrel)->setSiguiente($dog);

clientCode($monkey);
echo "\n";

$squirrel->setSiguiente($monkey)->setSiguiente($dog);
clientCode($squirrel);