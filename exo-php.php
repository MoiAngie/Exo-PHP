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

    






  </body>
  </html>
