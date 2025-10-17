<?php

ini_set("display_errors", 1);

include_once "Tree.php";
include_once "TreeFactory.php";

// Se crean muchos objetos Tree, pero solo unas pocas instancias de TreeType (Flyweights)
$trees = [];
$trees[] = new Tree(10, 50, TreeFactory::getTreeType("Roble", "Verde oscuro"));
$trees[] = new Tree(11, 51, TreeFactory::getTreeType("Pino", "Verde brillante")); // Nuevo Flyweight
$trees[] = new Tree(12, 52, TreeFactory::getTreeType("Roble", "Verde oscuro")); // Reutiliza el Flyweight existente

foreach ($trees as $tree) {
    $tree->draw();
}