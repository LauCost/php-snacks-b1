<?php 
$invitato = $_GET['name'];
$invitati = [
    "Fabio", "Fabiola", "Tiziano"
];

var_dump($invitati);

if(in_array($invitato, $invitati)){
    $result = 'ok';
} else{
    $result = 'ko';
}
?>

<p>
    <?= $result ?>
</p>



