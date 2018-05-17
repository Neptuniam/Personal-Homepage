<?php
  // $url = "https://maps.googleapis.com/maps/api/directions/json?origin=%27134%20harvard%2C%20guelph%2C%20on%27&destination=%27University%20Centre%2C%20Guelph%2C%20On%27&avoid=highways&mode=transit&key=AIzaSyAuZODWQu06M9hC-sGrhazBKCrLIIj9fzI";

  // set HTTP header
  $headers = array(
      'Content-Type: application/json',
  );

  // query string
  $fields = array(
      'key' => 'AIzaSyAuZODWQu06M9hC-sGrhazBKCrLIIj9fzI',
      'format' => 'json',
      'ip' => $_SERVER['REMOTE_ADDR'],
  );
  $url = "https://maps.googleapis.com/maps/api/directions/json?origin=%27134%20harvard%2C%20guelph%2C%20on%27&destination=%27University%20Centre%2C%20Guelph%2C%20On%27&avoid=highways&mode=transit&key=AIzaSyAuZODWQu06M9hC-sGrhazBKCrLIIj9fzI";

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

  echo(json_encode($result, true));
  // echo($result);

  /*
   *  output:
   *  Array
   *  (
   *      [statusCode] => "OK",
   *      [statusMessage] => "",
   *      [ipAddress] => "123.13.123.12",
   *      [countryCode] => "MY",
   *      [countryName] => "MALAYSIA",
   *  )
   */
?>
