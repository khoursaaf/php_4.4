<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Exercise</title>
  </head>
  <body>
    <p>Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :</p>
    <ol>
      <li>Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième</li>
      <li>Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième</li>
      <li>Les deux nombres sont identiques si les deux nombres sont égaux</li>
    </ol>
    <?php
    function numberComp($number1, $number2)
    {
      if ($number1 > $number2) {
        echo "Le premier nombre est plus grand.";
      } elseif ($number1 < $number2) {
        echo "Le premier nombre est plus petit.";
      } else {
        echo "Les deux nombres sont identiques.";
      }
    }
    $randNumber1 = rand(1, 100);
    $randNumber2 = rand(1, 100);
    ?>
    <p><?php echo "Le premier nombre est ".$randNumber1; ?></p>
    <p><?php echo "Le deuxieme nombre est ".$randNumber2; ?></p>
    <p><?php echo numberComp($randNumber1, $randNumber2); ?></p>
  </body>
</html>
