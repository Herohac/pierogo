<?php

// Clase base "Producto"
class Producto {
    // Atributos de la clase base
    public $codigo;
    public $nombre;
    public $precio;
    public $descripcion;
    public $stock;

    // Constructor de la clase base
    public function __construct($codigo, $nombre, $precio, $descripcion, $stock) {
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->descripcion = $descripcion;
        $this->stock = $stock;
    }

    // Método para mostrar información del producto
    public function mostrarProducto() {
        echo "<p><b>Código:</b> $this->codigo </p>" ;
        echo "<p><b>Nombre: </b> $this->nombre  </p>";
        echo "<p><b>Precio: $ </b> $this->precio  </p>";
        echo "<p><b>Descripción:</b> $this->descripcion  </p>";
        echo "<p><b>Stock: </b> $this->stock  unidades </p>";
    }
}

// Clase derivada "ProductoElectronico" que hereda de "Producto"
class ProductoElectronico extends Producto {
    // Atributo adicional para productos electrónicos
    public $marca;

    // Constructor de la clase derivada
    public function __construct($codigo, $nombre, $precio, $descripcion, $stock, $marca) {
        parent::__construct($codigo, $nombre, $precio, $descripcion, $stock);
        $this->marca = $marca;
    }

    // Método para mostrar información específica de productos electrónicos
    public function mostrarProductoElectronico() {
        parent::mostrarProducto(); // Llama al método de la clase base
        echo "<p> <b>Marca: </b> $this->marca  </p>";
    }
}

// Crear un objeto de la clase derivada "ProductoElectronico"
$productoElectronico = new ProductoElectronico("P123", "Teléfono móvil", 499.99, "Teléfono inteligente de última generación", 50, "Samsung");

// Mostrar información del producto electrónico
$productoElectronico->mostrarProductoElectronico();
?>
