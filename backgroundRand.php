<?php
  function getBackground() {
    header("Access-Control-Allow-Origin: *");
    $dir = 'backgrounds';
    $files = scandir($dir);

    $index = mt_rand(2, sizeof($files)-1);
    $path = 'backgrounds/' . $files[$index];
    $im = file_get_contents($path);
    $imdata = base64_encode($im);

    echo $path;
    // echo json_encode(array(
    //   'url'=> 'data:image/' . pathinfo($path, PATHINFO_EXTENSION) . ';base64,',
    //   'img'=> $imdata
    // ));
  }

  getBackground();
?>
