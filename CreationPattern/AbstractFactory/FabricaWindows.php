<?php

include_once("GUI.php");
include_once("BotonWindows.php");
include_once("VentanaWindows.php");

// FÁBRICAS CONCRETAS (Familia 1: Windows)
class FabricaWindows implements GUI {

    function crearBoton(): Boton{
        return new BotonWindows();
    }

    function crearVentana(): Ventana{
        return new VentanaWindows();
    }
}