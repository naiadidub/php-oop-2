<?php
require_once __DIR__.'/Classes/UtenteRegistrato.php';
require_once __DIR__.'/Classes/CartaDiCredito.php';
$user = new Utente('antonio', 'zaghi', 'email@gmail.com', 23);


$usersRegistered = new UtenteRegistrato('tonno', 'zaga', 'tonno@gmail.com', 23, 20);


$carta1 = new CartaDiCredito('177-123-444-545', 'tonjones', '20-02-2023');


$carta2 = new CartaDiCredito('106-231-844-021', 'tomCruise', '06-06-2022');


$user->setCards($carta1);

$usersRegistered->setCards($carta2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shop</title>
</head>
<body>
    <h1> nome: <?php echo $user->getNome().' '. $user->getCognome() ?> </h1>
    <h2> email: <?php echo $user->getEmail()?> </h2>
    <h2> età: <?php echo $user->getEta()?> </h2>
    <h3><?php foreach($user->getCarte() as $key => $value){ 
        echo $value->getSerialNumber().' '; 
        echo $value->getDataDiScadenza().' ';
        echo $value->getTitolare().' ';
    } ?></h3>
    <br>
    <h1> nome: <?php echo $usersRegistered->getNome().' '. $user->getCognome() ?> </h1>
    <h2> email: <?php echo $usersRegistered->getEmail()?> </h2>
    <h2> età: <?php echo $usersRegistered->getEta()?> </h2>
    <h2> sconto: <?php echo $usersRegistered->getSconto()?> </h2>
    <h3><?php foreach($usersRegistered->getCarte() as $key => $value){ 
        echo $value->getSerialNumber().' '; 
        echo $value->getDataDiScadenza().' ';
        echo $value->getTitolare().' ';
    } ?></h3>
</body>
</html>