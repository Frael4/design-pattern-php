<?php
ini_set('display_errors', 1);

include_once 'Cliente.php';
include_once 'CreditoPersonal.php';
include_once 'CreditoHipotecario.php';

$cliente = new Cliente();
$cliente->setName("Arturo");

echo "Mi nombre es: ";
echo $cliente->getName() . "\n";

echo "Operaciones con el credito personal \n";
// Pasamos el cliente creado
$credito = new CreditoPersonal($cliente);
$credito->runTemplate();

echo "Operaciones con el credito hipotecario \n";
// Pasamos el cliente creado
$creditoHipotecario = new CreditoHipotecario($cliente);
$creditoHipotecario->runTemplate();