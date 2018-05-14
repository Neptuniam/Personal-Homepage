<?php
  header("Access-Control-Allow-Origin: *");

  $dir = '//backgrounds';
  $files = scandir($dir);

  $index = mt_rand(2, sizeof($files));

  echo('backgrounds/' . $files[$index]);
?>
