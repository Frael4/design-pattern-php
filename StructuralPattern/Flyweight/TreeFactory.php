<?php

include_once "TreeType.php";

/**
 * Gestiona y reutiliza las instancias
 */
class TreeFactory
{
    /**
     * @var array TreeType
     */
    private static $treeTypes = [];

    /**
     * Summary of getTreeType
     * @param mixed $texture
     * @param mixed $color
     * @return void
     */
    static function getTreeType($texture, $color): TreeType
    {
        $key = "$texture:$color";

        if(!isset(self::$treeTypes[$key])){
            echo "Creando nuevo tipo de árbol (Flyweight): $texture, $color .\n";
            self::$treeTypes[$key] = new TreeType($texture, $color);
        }

        return self::$treeTypes[$key];
    }
}