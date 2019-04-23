<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta id="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Exos-PHP</title>

    <!-- Custom styles for this template -->
   <link href="css/reset.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- script  pour le javascript  -->
    <script src="js/script.js" type="text/javascript"></script>
  </head>

  <body>

    <h3>exercice 1</h3>
    <p>afficher  le plus petit entre a et b</p>

        <?php
         $a = 27;
         $b = 50;

         if ($a > $b) {
           echo $b;
        } else  {
           echo $a;
        }
         ?>

    <h3>exercice 2</h3>
    <p>afficher le plus petit entre a, b et c</p>

    <?php
     $a = 27;
     $b = 50;
     $c = 75;

     echo min($a, $b, $c);
     ?>

     <h3>exercice 3</h3>
     <p>afficher un nombre aléatoire entre 1 et 100</p>

     <?php
      echo rand( 1 , 100 );
      ?>

      <h3>exercice 4</h3>
      <p>afficher un nombre aléatoire entre 5 et 100</p>

      <?php
       echo rand ( 5 , 100 );
       ?>

       <h3>exercice 5</h3>
       <p>faire une fonction addition</p>

       <?php
          function fonctionAddition($a, $b) {
            echo $a + $b;
          }
          fonctionAddition(27,50);
          ?>

      <h3>exercice 6</h3>
      <p>faire une fonction PGCD=plus grand commun diviseur</p>
      <p> selon algorithme d'Euclide</p>

      <?php
      function pgcd($a, $b)
      {
        if($a<$b)
        list($a, $b)=array($b, $a);

        if($a%$b==0)
        return $b;
        else
        return pgcd($b, $a%$b);
      }

      pgcd(7, 4);
      ?>

      <h3>exercice 7</h3>
      <p>afficher « je vais faire du bon visuel » si x (nb entre 1 et 100) <50 sinon « je suis un pioupiou »</p>

        <?php
        $x = 27;

        if ($x > 1 && $x < 100) {
        echo "je vais faire du bon visuel";
      } else {
        echo "je suis un pioupiou";
      }
      ?>

      <h3>exercice 8</h3>
      <p>afficher 30 fois « petite perruche » +n°</p>

      <?php
      for ($x = 0; $x <=30; $x++) {
        echo "Je suis une perruche <br>";
      }
      ?>






  </body>
  </html>
