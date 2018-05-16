<?php
  function getBackground() {
    header("Access-Control-Allow-Origin: *");
    $dir = 'backgrounds';
    $files = scandir($dir);

    $index = mt_rand(2, sizeof($files)-1);

    echo('backgrounds/' . $files[$index]);
  }

  getBackground();
?>
