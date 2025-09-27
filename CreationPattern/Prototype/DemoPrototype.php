<?php
ini_set('display_errors', 1);

include_once("Usuario.php");

// 1. Crear el Prototipo Original
$usuarioOriginal = new Usuario(nombre: "Stevkson", age: 20);

echo "Original: " . $usuarioOriginal . "\n"; 

// 2. Clonación usando el método del Prototipo
$clonado = $usuarioOriginal->clonar();
echo "Clonado: " . $clonado . "\n"; 


// 3. Modificar el Clon
$clonado->setAge(25);

echo "\nOriginal (Verificación): " . $usuarioOriginal . "\n";
// El original sigue siendo Radio 10 y Color Rojo.
echo "Clonado (Modificado): " . $clonado . "\n";

// 4. Comprobar que son objetos diferentes
echo "¿Son el mismo objeto? " . ($usuarioOriginal === $clonado ? 'true' : 'false') . "\n"; 
// Salida: false
?>