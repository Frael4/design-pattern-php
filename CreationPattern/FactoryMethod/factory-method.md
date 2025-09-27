# [Factory Method](https://refactoring.guru/es/design-patterns/factory-method)

Este patrón define una interfaz para crear un objeto, pero permite que las subclases alteren el tipo de objetos que se crearán.

> Las clases `FabricaCarro` y `FabricaAvion` son las subclases encargadas de implementar/instanciar los objetos `Carro` y `Avion`

El método `iniciarProduccion()` en la clase `FabricaVehiculo.php` es el metodo **clave** de este pratón

```PHP
public function iniciarProduccion(){
    $vehiculo = $this->crearVehiculo();
    $vehiculo->conducir();
}
```
**Interface**
- `Vehiculo`

**Super Clase / Clase Fabricadora**
- `FabricaVehiculo`

## Ejecucion
`php FabricaCarro.php`

`php FabricaAvion.php`

## Salida

```BASH
Conduciendo un carro 🚗
```

```BASH
Conduciendo un avion ✈
```
