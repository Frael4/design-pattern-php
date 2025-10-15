<?php
ini_set("display_errors", 1);

include_once "Fieldset.php";
include_once "InputField.php";

// Uso

$addressGroup = new Fieldset("Dirección");
$addressGroup->add(new InputField("street"));
$addressGroup->add(new InputField("city"));


$mainForm = new Fieldset("Formulario Contacto");
$mainForm->add(new InputField("name"));
$mainForm->add($addressGroup);
$mainForm->add(new InputField("email"));

echo $mainForm->render();