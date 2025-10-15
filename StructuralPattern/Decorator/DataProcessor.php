<?php
/**
 * Interfaz base
 */
interface DataProcessor
{
    function process($data): string;
}