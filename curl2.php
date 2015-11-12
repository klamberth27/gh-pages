<?php

  $pin = $_GET['pin'];
  $state = $_GET['state'];

  // Create cURL call
  # $service_url = 'http://arduino.local/digital/' . $pin . '/' . $state;
  //$service_url = 'http://esp_f4d876.home/digital/' . $pin . '/' . $state;

//Electric Imp
 $service_url = 'https://agent.electricimp.com/93ixXX1eCug_?led=0';

 
  //Electric Imp //


  $curl = curl_init($service_url);
   
  // Send cURL to Yun board
  curl_setopt($curl, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 ); 
  $curl_response = curl_exec($curl);
  curl_close($curl);

  //Print answer
  echo $curl_response;

?>