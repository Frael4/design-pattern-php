<?php

/**
 * Interfaz de usuario
 */
interface GUI {
    function crearBoton(): Boton;
    function crearVentana(): Ventana;
}