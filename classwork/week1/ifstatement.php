<!doctype html>
<html lang="en">
  <head>
    <title>if statment!</title>
  </head>
  <body>
    <p>Complete the if statement</p>
    <p>
      <?php
        $age =   21;   // Set this to a number greater than 18

       if ($age < 17)

        {
          echo "You're old enough to vote!";
        }
        elseif ($age == 21) 
          {
            echo "get that man a beer!";
          }
      
      ?>
    </p>
  </body>
</html>
