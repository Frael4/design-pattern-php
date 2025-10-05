<?php

ini_set("display_errors", 1);

include_once "Component.php";
include_once "ConcreteComponentA.php";
include_once "ConcreteComponentB.php";
include_once "ConcreteVisitor1.php";
include_once "ConcreteVisitor2.php";

/**
 * El código del cliente puede ejecutar operaciones de visitante sobre cualquier conjunto de elementos sin
 * determinar sus clases concretas. La operación de aceptación dirige una llamada a
 * la operación correspondiente en el objeto de visitante.
 */
function clientCode(array $components, Visitor $visitor)
{
    foreach ($components as $component) {
        $component->accept($visitor);
    }
}

/**
 * @var Component[]
 */
$components = [
    new ConcreteComponentA(),
    new ConcreteComponentB()
];

echo "El código cliente funciona con todos los Visitors via base interface Visitor. \n";
$visitor1 = new ConcreteVisitor1();
clientCode($components, $visitor1);
echo "\n";

echo "Esto permite al mismo código cliente funcionar con diferentes tipos de Visitor. \n";
$visitor2 = new ConcreteVisitor2();
clientCode($components, $visitor2);