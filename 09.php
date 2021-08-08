<?php include 'includes/header.php';

//Connect to BD with mysqli.

$db = new mysqli('localhost', 'root', 'root', 'bienes_raices');

//Create query
$query = "SELECT titulo, imagen FROM propiedades";
$stmt = $db->prepare($query);


//execute
$stmt->execute();

//create variable
$stmt->bind_result($titulo, $img);


//Imprimimos el resultado
while($stmt->fetch()):
    var_dump($titulo);
    var_dump($img);
    echo ("<br>");
endwhile;


include 'includes/footer.php';