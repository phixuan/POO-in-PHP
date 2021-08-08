<?php include 'includes/header.php';

require 'vendor/autoload.php';

use App\Clientes;
use App\Detalles;

//Incluir las clases

// require 'clases/clientes.php';
// require 'clases/detalles.php';


//Otra forma />

// function mi_autoload($clase){
//     $partes = explode('\\', $clase);
//     require __DIR__ . '/clases/' . $partes[1] . '.php';
// }

// spl_autoload_register('mi_autoload');

//  Otra forma /<

$cliente = new Clientes();
echo ("<br>");
$detalles = new Detalles();


include 'includes/footer.php';