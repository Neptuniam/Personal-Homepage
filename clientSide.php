<?php
  header("Access-Control-Allow-Origin: *");

  $dir = 'C:\Users\Liam\Desktop\Programs\homepage\backgrounds';
  $files = scandir($dir);

  $index = mt_rand(2, sizeof($files));

  echo('backgrounds/' . $files[$index]);
?>
