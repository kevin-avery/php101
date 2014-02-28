<!doctype html>
<html lang="en">
  <head>
    <title>All Together Now 2</title>
  </head>
  <body>
    <p>Create two variables one called $guess and another called $number.</p>
    <?php   

    $guess =   4;   
    $number = 42;

       if ($guess < $number)

        	{
          echo "too low";
        	}
        else if ($guess > $number) 
          	{
            echo "too high";
          	}

          else
          	{
          		echo "you guessed right!";
      		}
      
      ?>
  </body>
</html>
