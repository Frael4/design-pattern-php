# [Decorator](https://refactoring.guru/es/design-patterns/decorator)

![alt](https://refactoring.guru/images/patterns/cards/decorator-mini.png?id=d30458908e315af195cb183bc52dbef9)

Decorator es un patrón de diseño estructural que permite añadir dinámicamente nuevos comportamientos a objetos colocándolos dentro de objetos especiales que los envuelven (_wrappers_).

> Utiliza el patrón Decorator cuando necesites asignar funcionalidades adicionales a objetos durante el tiempo de ejecución sin descomponer el código que utiliza esos objetos.

> Utiliza el patrón cuando resulte extraño o no sea posible extender el comportamiento de un objeto utilizando la herencia.

**Interface**

- `DataProcessor.php`: Interfaz base (Componente)

**Clases Abstractas**

- `ProcessorDecorator.php`: Decorador base, implementa `DataProcessor`

**Clases**

- `BasicDataProcessor.php`: Clase que se va decorar
- `LoggingDecorator.php`: Decorador 1
- `EncyptionDecorator.php`: Decorardor 2

## Ejecución
`php DemoDecorator.php`

## Salida
```BASH
**** Servicio con Logging ****
[LOG] Iniciando procesamiento de datos. 
[LOG] Procesamiento finalizado.
Datos básicos procesador: datosA.

**** Servicio con Cifrado y Logging ****
[LOG] Iniciando procesamiento de datos.
[ENCRYPT] Cifrando los datos antes de procesar...
[LOG] Procesamiento finalizado.
Datos básicos procesador: Bsotad.