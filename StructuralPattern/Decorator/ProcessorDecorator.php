<?php
include_once "DataProcessor.php";

/**
 * Decorador base
 */
abstract class ProcessorDecorator implements DataProcessor
{
    /**
     * @var DataProcessor
     */
    protected $processor;

    /**
     * Recibe un objeto de su misma implementacion
     * @param DataProcessor $processor
     */
    function __construct(DataProcessor $processor)
    {
        $this->processor = $processor;
    }

    /**
     * Sobrescribe el mètodo `process`
     * @param mixed $data
     * @return string
     */
    function process($data): string
    {
        return $this->processor->process($data);
    }
}