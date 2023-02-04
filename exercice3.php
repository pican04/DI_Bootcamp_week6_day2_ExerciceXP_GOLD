<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>ExerciceXP3_GOLD</title>
  </head>
  <body>

    <h1>Get The Century</h1>
 <!-- Create a function that takes in a year and returns the correct century. --> 
    <form action="" method ="POST">
        <h2>The Century</h2>
        <p>year: <input type="number" name="number" >/p>
        <button type="submit" name ="submit" value ="valider">send</button>
        </form>

        <?php 
            if ( isset( $_POST['submit'] ) ) 
            {
                function getCentury() 
                {
                   
                    return ceil($_POST['number'] / 100);
                } 
                echo  " We are to " .getCentury(). "century </br>";
            }
        ?>
    </body>
</html>