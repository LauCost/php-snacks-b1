<?php 

$decimaGiornataBasket = [ // primo array che contiene le partite

    [
      "casa" => "Olimpia Milano",
      "puntiCasa" => 55,
      "ospite" => "Cantù",
      "puntiOspite" => 60,
    ],
    [
      "casa" => "Los Angeles Lakers",
      "puntiCasa" => 70,
      "ospite" => "Chicago Bulls",
      "puntiOspite" => 90,
    ],
    [
      "casa" => "San Antonio Spurs",
      "puntiCasa" => 10,
      "ospite" => "Golden State Warriors",
      "puntiOspite" => 105,
    ]
  ];


  /* var_dump($decimaGiornataBasket); */
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

<?php for ( $i = 0; $i < count($decimaGiornataBasket); $i++) {

    ?> 

    <p>
      <?php echo $decimaGiornataBasket[$i]['casa'] ?> -
      <?php echo $decimaGiornataBasket[$i]['ospite'] ?> |
      <?php echo $decimaGiornataBasket[$i]['puntiCasa'] ?> -
      <?php echo $decimaGiornataBasket[$i]['puntiOspite'] ?>
    </p>

    <?php } ?>
    
</body>
</html>