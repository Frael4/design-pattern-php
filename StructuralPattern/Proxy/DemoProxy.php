<?php

ini_set("display_errors", 1);

include_once "DataAccessProxy.php";

// Uso (El proxy se inicializa rápido, el objeto real se carga en la primera llamada a getData)
$dataProxy = new DataAccessProxy();
echo "Aplicación iniciada. El objeto pesado aún no se ha cargado. \n";

// La primera llamada a getData() dispara la carga del objeto real
echo "Resultado: " . $dataProxy->getData() . "\n"; 

// Las llamadas posteriores son rápidas
echo "Resultado (otra vez): " . $dataProxy->getData() . "\n";