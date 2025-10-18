# [Proxy](https://refactoring.guru/es/design-patterns/proxy)

![alt](https://refactoring.guru/images/patterns/cards/proxy-mini.png?id=25890b11e7dc5af29625ccd0678b63a8)

El patrón Proxy proporciona un sustituto o marcador de posición para otro objeto (el sujeto real). El proxy controla el acceso al sujeto real y puede añadir lógica extra (como control de acceso o lazy loading).

> Inicialización diferida (proxy virtual). Es cuando tienes un objeto de servicio muy pesado que utiliza muchos recursos del sistema al estar siempre funcionando, aunque solo lo necesites de vez en cuando.



**Interface**

- `DataAccess.php`

**Clases**

- `HeavyDataConnector.php`: Objeto que simula la carga pesada
- `DataAcccessProxy.php`: *Proxy* implementa `DataAccess`

> **[OTRO EJEMPLO DEL PATRON PROXY EN PHP](https://refactoring.guru/es/design-patterns/proxy/php/example)**

## Ejecución
`php DemoProxy.php`

## Salida
```BASH

Aplicación iniciada. El objeto pesado aún no se ha cargado. 
Proxy: Carga diferida del objeto pesado... 
Conexión  a la BD establecida. 
Resultado: Datos sensibles del sistema.

Resultado (otra vez): Datos sensibles del sistema.