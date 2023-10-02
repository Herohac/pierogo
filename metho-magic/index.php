<?php

class Producto {
    private $codigo;
    private $nombre;
    private $precio;
    private $descripcion;
    private $stock;

    // Constructor
    public function __construct($codigo, $nombre, $precio, $descripcion, $stock) {
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->descripcion = $descripcion;
        $this->stock = $stock;
    }

    // Método mágico __get para acceder a propiedades privadas
    public function __get($propiedad) {
        if (property_exists($this, $propiedad)) {
            return $this->$propiedad;
        } else {
            return "La propiedad '$propiedad' no existe en esta clase.";
        }
    } 

    // Método mágico __set para asignar valores a propiedades privadas
    public function __set($propiedad, $valor) {
        if (property_exists($this, $propiedad)) {
            $this->$propiedad = $valor;
        } else {
            echo "La propiedad '$propiedad' no existe en esta clase.";
        }
    }

    // Método mágico __toString para representar el objeto como una cadena
    public function __toString() {
        return "Código: $this->codigo, Nombre: $this->nombre, Precio: $this->precio, Descripción: $this->descripcion, Stock: $this->stock";
    }
}

// Crear un objeto de la clase Producto
$producto = new Producto("P123", "Teléfono móvil", 499.99, "Teléfono inteligente de última generación", 50);

// Utilizar el método __get para acceder a una propiedad privada
echo "Nombre del producto: " . $producto->__get("nombre") . "<br>";
echo "precio  del producto: ".$producto->__get("precio") . "<br>";
echo "descripción del producto: ".$producto->__get("descripcion") . "<br>";

// Utilizar el método __set para asignar un valor a una propiedad privada
$producto->__set("stock", 610);
echo "Nuevo stock: " . $producto->__get("stock") . "<br>";


 $producto->__set("descripcion", "HOLA SOY UNA  NUEVA DESCRIPCIÓN");
 echo "nueva descripción: ". $producto->__get("descripcion") . "<br>";

// Utilizar el método __toString para mostrar la información del producto
echo $producto;
?>
