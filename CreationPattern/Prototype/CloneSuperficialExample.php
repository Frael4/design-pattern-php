<?php
/**
 * ClonableObject
 * 
 * Esta clase es un ejemplo de una copia tradicional superficial
 */
class ClonableObject
{
    public $nombre;
    public $objectProperty;

    public function __construct($value)
    {
        $this->nombre = $value;
        // Creamos un objeto generico
        $this->objectProperty = new stdClass();
        $this->objectProperty->name = "Componente inicial";
    }
    // ¡OJO! Aquí NO definimos __clone()
}

// Crear el Original
$original = new ClonableObject("Objeto Original");
$original->objectProperty->name = "Componente Único";

echo "Original Componente: " . $original->nombre . "\n";
echo "Original Componente: " . $original->objectProperty->name . "\n";

// Clonar
$copia = clone $original;

// Modificar SÓLO la copia
$copia->objectProperty->name = "Componente Modificado en la Copia";

echo "--- Resultado sin __clone() ---\n";
echo "Original Componente: " . $original->objectProperty->name . "\n";
echo "Copia Componente: " . $copia->objectProperty->name . "\n";

// Clonar sin clone
$copia2 = $original;
// Modificar SÓLO la copia2
$copia2->objectProperty->name = "Componente Modificado en la Copia 2";

echo "Original Componente: " . $original->objectProperty->name . "\n";
echo "Copia2 Componente: " . $copia2->objectProperty->name . "\n";
