<?php include 'includes/header.php';

//Incluir las clases

// require 'clases/clientes.php';
// require 'clases/detalles.php';


//Otra forma />

function mi_autoload($clase){
    echo ($clase);
    require __DIR__ . '/clases/' . $clase . '.php';
}

spl_autoload_register('mi_autoload');

//  Otra forma /<


$cliente = new Clientes();
echo ("<br>");
$detalles = new Detalles();


include 'includes/footer.php';