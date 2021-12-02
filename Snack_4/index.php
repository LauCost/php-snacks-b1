<?php

$numeri = range(0,100);
shuffle($numeri);

$numeri = array_slice($numeri, 0, 15);

/* var_dump($numeri) */



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<ul>
    <?php
    for ($i = 0; $i < count($numeri); $i++){
        ?>

        <li>
            <?= $numeri[$i] ?>
        </li>
    <?php
    }
    ?>
    
</ul>
</body>
</html>