<!doctype html>
<html lang="en">
  <head>
    <title>Your Function</title>
  </head>
  <body>
    <?php

    Function namer($name = null) {
      if ($name == null) {
        return "No name set";
      } 


        return "This is your first Function " . $name;
      
    }

echo namer("KevinA");

    
    // Write a function that takes an argument $name that is defaulted to null
    // within the block check if the argument value is null and return No Name Set
    // else return $name as a formatted string "This is your first function $name!"

    // write a function that takes an argument and returns the square of that arguemtn
    Function square($x) {
    }
    
    echo squre(36);

    ?>
  </body>
</html>
