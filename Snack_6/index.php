<?php
 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
 
    var_dump($db)
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<?php

foreach($db as $data => $persone){

    for($i = 0; $i < count($persone); $i++){

        if($persone == 'teachers'){
            ?>

            <p class="red">
                <?= $persone[$i]['name'] ?> -
                <?= $persone[$i]['lastname'] ?>
            </p>
            <?php
        }else{
            ?>
            <p>
                <?= $persone[$i]['name'] ?> -
                <?= $persone[$i]['lastname'] ?>
            </p>
            <?php
        }
    }
}
    ?>
</body>
</html>