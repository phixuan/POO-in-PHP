<?php 
declare( strict_types = 1);
include 'includes/header.php';

//ENCAPSULACIÓN

class Producto {

    //Public - se puede modificar y acceder en cualquier lugar
    //Protected - Se puede acceder y modificar en la clase unicamente en la clase
    //Private solo miembros de la misma clase pueden acceder a el.

    public function __construct(protected string $nombre, public int $precio, public bool $disponible)
    {
    }

    public function mostrarProducto(){
        echo ("El producto es: " . $this->nombre . " y su precio es de $" . $this->precio);
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre(string $nombre){
        $this->nombre = $nombre;
    }
}

$producto = new Producto('Tablet', 200, true);
// $producto->mostrarProducto();

echo ($producto->setNombre("Nuevo"));

echo ("<pre>");
var_dump($producto);
echo ("</pre>");

$producto2 = new Producto("Monitor", 100, true);
// $producto2->mostrarProducto();

echo ($producto2->getNombre());

// echo ("<pre>");
// var_dump($producto2);
// echo ("</pre>");

include 'includes/footer.php';