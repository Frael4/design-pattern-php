<?php

ini_set("display_errors", 1);

include_once "Adaptee.php";
include_once "Adapter.php";
include_once "Target.php";

function clientCode(Target $target)
{
    echo $target->request();
}

echo "Cliente: Yo puedo trabajar bien con los objetos de Target. \n";
$target = new Target();
clientCode($target);
echo "\n\n";

$adaptee = new Adaptee();
echo "Cliente: La clase Adaptee tiene una interface rara, yo no la entiendo.\n";
echo "Adaptee: " . $adaptee->specificRequest();
echo "\n\n";

echo "Cliente: Pero yo puedo trabajar con ese via el Adapter.\n";
$adapter = new Adapter($adaptee);
clientCode($adapter);