# [Command](https://refactoring.guru/es/design-patterns/command)

Command es un patrón de diseño de comportamiento que convierte una solicitud en un objeto independiente que contiene toda la información sobre la solicitud.

> El patrón Command puede convertir una llamada a un método específico en un objeto autónomo. Este cambio abre la puerta a muchos usos interesantes: puedes pasar comandos como argumentos de método, almacenarlos dentro de otros objetos, cambiar comandos vinculados durante el tiempo de ejecución, etc.

**Interface**

`Comando.php`: Interfaz **clave** para el patrón

**Clases**

`ComandoSubirTemp.php`: Implementa la interface `Comando`
`Termostato.php`: Clase receptora
`Boton.php`: Clase que se encargara de desencadenar la acción

## Ejecución
`DemoCommand.php`

## Salida
```BASH
Termostato: Subiendo temperatura 🌡 🥵
Termostato: Bajando temperatura 🌡 🥶