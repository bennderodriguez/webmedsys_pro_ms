<?php

//API Url
$url = 'http://192.168.61.36/webmedsys/REST/create.php';

//Initiate cURL.
$ch = curl_init($url);

//The JSON data. original ejemplo 
/* $jsonData = array(
  'username' => 'MyUsername',
  'password' => 'MyPassword'
  ); */

//BGR convierto json en array para enviarlo 
$array = file_get_contents('http://192.168.61.36/webmedsys/boker.json');
//aqui ya es array
$jsonData = json_decode($array);
//Encode the array into JSON.
$jsonDataEncoded = json_encode($jsonData);

//Tell cURL that we want to send a POST request.
curl_setopt($ch, CURLOPT_POST, 1);

//Attach our encoded JSON string to the POST fields.
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);

//Set the content type to application/json
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

//Execute the request
echo $result = curl_exec($ch);

