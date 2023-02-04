<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>ExerciceXP1_GOLD</title>
  </head>
  <body>

    <h1>Calculate Factorial Of A Number</h1>
 <!-- Write a program to calculate factorial of a number using for loop in php. --> 
      <form action="" method ="POST">
      <h3>calculate factorial of a number</h3>
      <p> Number :<input type="number" name="number" > </p>
      <button type="submit" name ="submit" value ="valider">send</button>
      </form>

  <?php
      if ( isset( $_POST['submit'] ) ) 
      { 
        $factoriel = 1;
        for ($i = 1; $i <= $_POST['number']; $i++) 
        {
          $factoriel= $factoriel * $i;
        } 
        echo ' the factorial of' . $_POST['number']  . ' is ' . $factoriel;
      }
  ?>
      
  </body>
</html>