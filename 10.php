<?php include 'includes/header.php';

    //Conectar con PDO
$db = new PDO('mysql:host=localhost; dbname=bienes_raices', 'root', 'root');

//Create query
$query = "SELECT titulo, imagen from propiedades";


//Prepare
$stmt = $db->prepare($query);

//execute
$stmt->execute();


//Result
$result = $stmt->fetchAll( PDO::FETCH_ASSOC );


//repeat result
foreach($result as $propiedad):
    echo ($propiedad['titulo']);
    echo ('<br>');
    echo ($propiedad['imagen']);
    echo ('<br>');
    echo ('<br>');
endforeach;

// echo ("<pre>");
// var_dump($result);
// echo ("</pre>");

include 'includes/footer.php';