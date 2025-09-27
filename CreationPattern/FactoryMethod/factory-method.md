## Factory Method
Este patrón define una interfaz para crear un objeto, pero permite que las subclases alteren el tipo de objetos que se crearán.

> Las clases `FabricaCarro` y `FabricaAvion` son las subclases encargadas de implementar/instanciar los objetos `Carro` y `Avion`

**Super Clases**
- `Vehiculo`
- `FabricaVehiculo`

### Ejecucion
`php FabricaCarro.php`

`php FabricaAvion.php`

### Salida

```BASH
E:\PHP Projects\Patrones de diseño PHP\CreationPattern\FactoryMethod>php FabricaCarro.php 
Conduciendo un carro 🚗

```

```BASH
E:\PHP Projects\Patrones de diseño PHP\CreationPattern\FactoryMethod>php FabricaAvion.php
Conduciendo un avion ✈
```
