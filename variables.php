<?php
echo "Hola mundo <br/>";
echo " Amo la pizza <br/>" 
// Esto es un comentario
/* Este es un
multiple
comentario
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP CURSO </title>
</head>
<body>
    <?php
    $name = "Melo Matthew";
    $food = "pizza";
    $email = "fake@gmail.com";
    $age = 35;
    $users = 2;
    $quantity = 3;

    $gpa = 2.5;
    $price = 4.99;
    $tax_rate = 5.1;

    $employed = true;
    $online = false;
    $for_sale = true;

    $total = null;

    echo "Hola {$name} <br>";
    echo "Me gusta la {$food} <br>";
    echo "Tu email es: {$email} <br>";

    echo "tu tienes {$age} anos <br>";
    echo "Los {$users} estan online <br>";
    echo "te gustaria comprar {$quantity} articulos <br>";
    
    echo "Tu gpa es: {$gpa} <br>";
    echo "Tu pizza es {$price} <br>";
    echo "the sales taz rates is: {$tax_rate} <br>";

    echo " online status: {$online} <br>";
    echo "tu orden es {$quantity} x {$food}s";
    $total = $quantity * $price;
    echo "Tu total es: ${$total}";
        ?>
    
</body>
</html>