<?php
// Activamos la visualizacion de errores
ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

/**
 * Clase Singleton
 */
class Singleton
{
    // Una variable estatica siempre debe ser inicializada, aunque sea a null
    // Objeto de una sola instancias
    private static ?Singleton $singleton = null;

    //No puede usar $this en Funciones estaticas instead use self
    public static function getInstance()
    {
        if (self::$singleton === null) {
            self::$singleton = new Singleton();
        }

        return self::$singleton;
    }
}
// Formas inicializar la instancia
// Con String y variable
$var = 'Singleton';
echo $var::getInstance() ? "Instancia creada \n" : "Error \n";

// Con asignacion a variable
$otherVar = Singleton::getInstance();
$otherOtherVar = Singleton::getInstance();
var_dump($otherVar);
var_dump($otherOtherVar);

var_dump($otherOtherVar === $otherVar);

var_dump(Singleton::getInstance() === Singleton::getInstance());