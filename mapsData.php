<?php
  // $url = "https://maps.googleapis.com/maps/api/directions/json?origin=%27134%20harvard%2C%20guelph%2C%20on%27&destination=%27University%20Centre%2C%20Guelph%2C%20On%27&avoid=highways&mode=transit&key=AIzaSyAuZODWQu06M9hC-sGrhazBKCrLIIj9fzI";

  // set HTTP header
  $headers = array(
      'Content-Type: application/json',
  );

  // $origin = "\'134 Harvard Rd, Guelph, ON N1G 3R1, Canada\'";
  // $destination = "\'Guelph, ON N1G 1Y4, Canada\'";

  $origin = "43.519543,-80.228988";
  $destination = "43.5301401,-80.22631060000001";

  // echo(document.getElementById('userPosition').innerHTML);

  // $url = "https://maps.googleapis.com/maps/api/directions/json?origin=%27134%20harvard%2C%20guelph%2C%20on%27&destination=%27University%20Centre%2C%20Guelph%2C%20On%27&avoid=highways&mode=transit&key=AIzaSyAuZODWQu06M9hC-sGrhazBKCrLIIj9fzI";
  $url = "https://maps.googleapis.com/maps/api/directions/json?origin=" . $origin . "&destination=" . $destination . "&avoid=highways&mode=transit&key=AIzaSyAuZODWQu06M9hC-sGrhazBKCrLIIj9fzI";

  // Open connection
  $ch = curl_init();

  // Set the url, number of GET vars, GET data
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_POST, false);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true );
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

  // Execute request
  $result = curl_exec($ch);

  // Close connection
  curl_close($ch);

  // get the result and parse to JSON
  // $result_arr = json_decode($result, true);
  // print_r($result_arr);

  echo(json_encode(json_decode($result, true)));
  // echo($result);
?>
