<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    $age = filter_input(INPUT_POST, 'age');

    function isBuildingDestroyable($age)

    {
      if ($age >= 100){
        return true;

      }
      return false;
    }

     ?>

  </body>
</html>
