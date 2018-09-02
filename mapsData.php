<?php
  // $url = "https://maps.googleapis.com/maps/api/directions/json?origin=%27134%20harvard%2C%20guelph%2C%20on%27&destination=%27University%20Centre%2C%20Guelph%2C%20On%27&avoid=highways&mode=transit&key=AIzaSyAuZODWQu06M9hC-sGrhazBKCrLIIj9fzI";

  // set HTTP header
  $headers = array(
      'Content-Type: application/json',
  );
  // Important addresses
  $home   = "43.519543,-80.228988";
  $school = "43.5301401,-80.22631060000001";


  // $curLoc = $_GET['location'];
  $curLoc = "43.519543,-80.228988";
  // $curLoc = "43.511616,-80.209521";

  //If we're close enough to home, take us from home to school
  if (round($curLoc, 4) == round($home, 4)) {
    $origin = $home;
    $destination = $school;
  //Otherwise, we want our current locatin to home
  } else {
    $origin = $curLoc;
    $destination = $home;
  }

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
  echo(json_encode(json_decode($result, true)));
?>
