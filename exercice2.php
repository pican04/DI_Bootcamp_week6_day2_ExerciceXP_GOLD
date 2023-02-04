<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ExerciceXP2_GOLD</title>
  </head>
  <body>

    <h1>Pattern Using For Loop</h1>
 <!-- Write a Program to create given pattern with * using for loop --> 
        <?php  
            $number = 1;
            for($number=1 ; $number<=8 ; $number++)
            {
                for ($number1=1 ; $number1<=$number ; $number1++)
                    {
                        echo "*";
                    }
                echo "<br>";
            }
        ?>
    </body>
</html>