<?php 

$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET[age];

 /* var_dump($name, $mail, $age); */

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
    
<?php if ( strlen($name)>3 && filter_var($mail, FILTER_VALIDATE_EMAIL) && filter_var($age, FILTER_VALIDATE_INT)){
    ?>

    <p style="font-size: 35px;">
        Accesso riuscito
    </p>
<?php } else { ?>
    <p style="font-size: 35px;">
      Accesso Non riuscito
    </p>
<?php } ?>



</body>
</html>