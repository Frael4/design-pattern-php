<?php

ini_set("display_errors", 1);

include_once "TV.php";
include_once "ConcreteRemote.php";

$tv = new TV();
$advancedRemote = new ConcreteRemote($tv); // El puente es la inyección de dependencia

$advancedRemote->powerOn();
$tv->setChannel(7);
$advancedRemote->mute();
$advancedRemote->powerOff();