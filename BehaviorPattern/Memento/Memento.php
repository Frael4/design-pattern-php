<?php

/**
 * Interface Memento permite recuperar los metadatos
 * del memento y no expone el estado del Originador
 */
interface Memento {

    function getState():string;

    function getDate(): string;
}