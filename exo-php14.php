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


      <?php
      function pgcd($nombre,$nombre2){
   while($nombre>1){
        $reste = $nombre%$nombre2;
        if($reste == 0){
        break; // sorti quand resultat trouvé
        }
        $nombre=$nombre2;
        $nombre2=$reste;
    }
return $nombre2; // retourne le resultat
}
echo pgcd( 120,420 );
// Affiche 60
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
        echo "$x Je suis une perruche <br>";
      }
      ?>

      <h3>exercice 9</h3>
      <p>afficher « petite perruche » +n° tant que x(nb aléatoire entre 1 et 100) est <50</p>

      <?php
      for ($x = rand (1 , 100); $x <=50; $x++) {
        echo "$x Je suis une perruche <br>";
      }
      ?>

      <h3>exercice 10</h3>
      <p>faire une fonction qui prend en param x, si x==1 als afficher (AAAA), si x==2 (OOOO), x==3(CCCC), x==4(DDDD) sinon (je suis une perruche)</p>

      <?php
      $x = rand (1 , 5);

      if ($x == 1) {
        echo "AAAA";
      } elseif ($x == 2) {
        echo "0000";
      } elseif ($x == 3) {
        echo "CCCC";
      } elseif ($x == 4) {
        echo "DDDD";
      } else {
        echo 'je suis une perruche';
      }
?>

    <h3>exercice 11</h3>
    <p>10 avec switch/case</p>

    <?php
    $x = rand (1 , 5);

    switch ($x) {
      case '1':
        echo "AAAA";
        break;
      case '2':
        echo "0000";
        break;
      case '3':
        echo "CCCC";
        break;
      case '4':
        echo "DDDD";
        break;
      default:
        echo 'je suis une perruche';
        break;
    }
    ?>

    <h3>exercice 12</h3>
    <p>si x==1 (x aléatoire entre 1 et 2), include page1.html, sinon include page2.html<br/>
        > page1 = h1 je suis une perruche<br/>
        > page2 = h2 j’ai bientôt fini les exos php</p>

        <?php
        $x = rand (1 , 2);

        switch ($x) {
          case '1':
            include 'page1.php';
            break;

          default:
            include 'page2.php';
            break;
        }
        ?>

        <?php
        $x = rand (1 , 2);

        if ($x = 1) {
          include 'page1.php';
        } else {
          include 'page2.php';
        }
        ?>

        <h3>exercice 13</h3>
        <p>générer 10 valeur aléatoire dont chaque valeur sera ajoutée dans un tableau tab</p>

        <?php
        $lol = array($x = rand(1, 100),$x = rand(1, 100),$x = rand(1, 100),$x = rand(1, 100),$x = rand(1, 100),$x = rand(1, 100),);
        ?>

        <h3>exercice 14</h3>
        <p>faire une fonction qui trie un tableau de 10 valeur</p>

        <?php
        $tableau = array (1, 7, 5, 6, 9, 3, 2, 4, 8, 0);
          sort($tableau);

          $arrlong = count($tableau);
          for($x = 0; $x < $arrlong; $x++)
          {
            echo $tableau[$x];
            echo "<br>";
          }
          ?>






  </body>
  </html>
