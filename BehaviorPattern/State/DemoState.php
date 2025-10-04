<?php

ini_set("display_errors", 1);

include_once "ConcreteStateA.php";
include_once "Context.php";

$context = new Context(new ConcreteStateA());

$context->request1();
$context->request2();