<?php

ini_set("display_errors", 1);

include_once "Component1.php";
include_once "Component2.php";
include_once "ConcreteMediator.php";

$c1 = new Component1();
$c2 = new Component2();

$mediator = new ConcreteMediator($c1, $c2);

echo "Cliente desencadena operación A. \n";
$c1->doA();

echo "\n";
echo "Cliente desencadena operación D. \n";
$c2->doD();

