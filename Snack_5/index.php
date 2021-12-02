<?php

$text = "There is no right fucking answer. The splendor of the mystery is that you don’t understand. Keep fucking going. It isn’t what you are, but what you’re going to become. Make your work consistent but not fucking predictable. Someday is not a fucking day of the week. Celebrate your fucking failures. Then you’ll prove to yourself that you can survive anything. Paul Rand once said, “The public is more familiar with bad fucking design than good design. It is, in effect, conditioned to prefer bad design, because that is what it lives with. The new becomes threatening, the old reassuring.” Defy fucking convention. If you don’t test your will against the dissent of the world, it can never grow stronger. You won’t get good at anything by doing it a lot fucking aimlessly. The details are not the details. They make the fucking design. What’s important is the fucking drive to see a project through no matter what. When you put in the time and conscious effort to do anything the right way, you’ll do everything a little better. When you design, you have to draw on your own fucking life experiences. If it’s not something you would want to";

$text1 = explode('.', $text);

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

<h2>
    Testo originale
</h2>

<p>
    <?= $text ?>
</p>
    
<h2>
    Testo suddiviso
</h2>

<?php 

for ($i = 0; $i < count($text1); $i++){
    ?>

    <p>
        <?php echo $testoSeparato = $text1[$i] ?>
    </p>

    <?php
}

?>


</body>
</html>