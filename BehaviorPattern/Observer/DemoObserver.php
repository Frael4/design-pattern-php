<?php

ini_set("display_erros", 1);
ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

include_once "ConcreteObserverA.php";
include_once "ConcreteObserverB.php";
include_once "Sujeto.php";

$sujeto = new Sujeto();
// Subscribimos al observedor 1
$o1 = new ConcreteObserverA();
$sujeto->attach($o1);
// Subscribimos al observedor 2
$o2 = new ConcreteObserverB();
$sujeto->attach($o2);

$sujeto->someBusinessLogic();
$sujeto->someBusinessLogic();

// Desubscribimos al observador 2
//$sujeto->detach($o2);

$sujeto->someBusinessLogic();