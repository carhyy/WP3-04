<?php
require_once 'functions.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">

    <title></title>
  </head>

  <body>
    <?php

    $buildings[]=60;
    $buildings[]=70;
    $buildings[]=150;


for ($i=0; $i <count($buildings) ; $i++)
 {  if(isBuildingDestroyable($buildings[$i])){

   echo "Budovu se stářím".$buildings[$i]. "lze zbourat!<br>";
   }
   else {
   echo "Budovu se stářím".$buildings[$i]. "nelze zbourat!<br>";

   }


   echo '<br>';
}
     ?>

  </body>

</html>
