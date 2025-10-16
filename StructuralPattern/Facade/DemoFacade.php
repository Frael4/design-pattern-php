<?php

ini_set("display_errors", 1);

include_once "DatabaseFacade.php";

// Uso por parte del cliente
$dbConfig = ['host' => 'localhost', 'user' => 'root'];
$dbFacade = new DatabaseFacade($dbConfig);

echo $dbFacade->fetchAllUsers("status = 'active'");
echo $dbFacade->close();