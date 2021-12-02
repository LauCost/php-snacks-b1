<?php
$studentiClasse = [
    [
      "nome" => "Fabio",
      "cognome" => "pacifici",
      "voti" => [6,5,7,8,6,6,4]
    ],
    [
      "nome" => "Fabiola",
      "cognome" => "Gardin",
      "voti" => [6,8,7,8,9,5,7]
    ],
    [
      "nome" => "Tiziano",
      "cognome" => "Nicolai",
      "voti" => [6,6,7,8,6,6,6]
    ]
];

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

<?php

for( $i = 0; $i < count($studentiClasse); $i++){
    ?>

    <p>
        <?= $studentiClasse[$i]["nome"] ?> 
        <?= $studentiClasse[$i]["cognome"] ?> <br>
        La media dei voti è:
        <?= $media = array_sum($studentiClasse[$i]['voti'])/count($studentiClasse[$i]['voti']) ?>
    </p>

    <?php
} ?>

</body>
</html>