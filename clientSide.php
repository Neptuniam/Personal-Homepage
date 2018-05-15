<?php
  function getBackground() {
    header("Access-Control-Allow-Origin: *");
    $dir = 'C:\xampp\htdocs\homepage\backgrounds';
    $files = scandir($dir);

    $index = mt_rand(2, sizeof($files));

    echo('backgrounds/' . $files[$index]);
  }

  getBackground();
?>
