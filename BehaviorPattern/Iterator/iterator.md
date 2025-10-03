# [Iterator](https://refactoring.guru/es/design-patterns/iterator)

Permite recorrer elementos de una colección sin exponer su representación subyacente. En Java, la interfaz estándar `java.util.Iterator` ya implementa este patrón.

> En PHP se usa `Iterator` de `class.iterator.php`

**Clases**

- `AlphabeticalOrderIterator.php`: Implementa `Iterator`
- `WordsCollection.php`: Implementa `IteratorAggregate`

## Ejecución
`php DemoIterator.php`

## Salida

```BASH
Straight traversal:
First
Second
Third

Reverse traversal:
Third
Second
First