<?php
// definisco la variabile
$doggerel = "Esce fuori la mosca dal moscato

per agguantar la mora dal moraio.

Fra mosca e mora

la storia è questa e ve la conto ora.


Esce fuori il ragno dal ragnato

per agguantar la mosca dal moscato.

Fra ragno, mosca e mora

la storia è questa e ve la conto ora.

Esce fuori il grillo dal grillaio

per aggauantar il ragno del ragnaio.

Fra grillo, ragno, mosca e mora

la storia è questa e ve la conto ora.

Esce fuori il topo dal topaio

per agguantar il grillo dal grillaio.

Fra topo,grillo,ragno, mosca e mora

la storia è questa e ve la conto ora.";

$doggerelLength = strlen($doggerel); //utilizzo strlen per la lunghezza della stringa
$censure = "***"; //creo una variabile contente la stringa che verrà utilizzata come replace della censura
$badwords = $_GET["badword"]; // passo attraverso get la parola da censurare
$doggerelCensored = str_replace($badwords, $censure, $doggerel);
/* utilizzo replace per cambiare
valore e censurare  una porzione di stringa */
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>php badwords</title>
  </head>
  <body>
    <div class="container">
      <div class="text">
        <h1>La Mosca</h1> <span><h2>lunghezza filastrocca: <?php echo $doggerelLength ?> caratteri</h2> </span>
        <p><?php echo $doggerelCensored ?></p>
      </div>
    </div>
  </body>
</html>
