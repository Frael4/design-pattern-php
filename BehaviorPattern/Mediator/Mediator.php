<?php

/**
 * Interfaz Mediator
 */
interface Mediator {
    function notify(object $sender, string $event): void;
}