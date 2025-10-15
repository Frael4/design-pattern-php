<?php

ini_set("display_erros", 1);

include_once "BasicDataProcessor.php";
include_once "LoggingDecorator.php";
include_once "EncryptionDecorator.php";

// Uso

$basic = new BasicDataProcessor();

// Decorar solo con Logging
$loggedProcessor = new LoggingDecorator($basic);
echo "**** Servicio con Logging ****\n";
echo $loggedProcessor->process("datosA") . "\n\n";

// Decorar con cifrado y logging
$encrytedAndLoggegProcessor = new LoggingDecorator(new EncryptionDecorator($basic));
echo "**** Servicio con Cifrado y Logging ****\n";
echo $encrytedAndLoggegProcessor->process("datosB") . "\n";