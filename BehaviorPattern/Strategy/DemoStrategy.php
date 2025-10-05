<?php

include_once "Context.php";
include_once "ConcreteStrategyA.php";
include_once "ConcreteStrategyB.php";

$context = new Context(new ConcreteStrategyA());
echo "Cliente: Estrategia esta configurada a ordenamiento normal.\n";
$context->doSomeBusinessLogic();

echo "\n";

echo "Cliente: Estrategia esta configurada a ordenamiento inverso.\n";
$context->setStrategy(new ConcreteStrategyB());
$context->doSomeBusinessLogic();