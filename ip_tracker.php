<!DOCTYPE html>
<html lang="eng_US">
  <head>
    <link rel="stylesheet" href="form style.css">
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width,initial-scale=1.0">
          <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.debug.js"></script>

<link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Anek+Malayalam:wght@800&family=Bungee+Spice&family=Kdam+Thmor+Pro&family=Macondo&family=Mingzat&family=Montserrat:wght@300&family=Playfair+Display:wght@400;500;600&family=Poppins:wght@300;400;500;600;700&family=Roboto+Flex:opsz,wght@8..144,100;8..144,400&family=Roboto:ital,wght@0,300;0,400;0,900;1,300&display=swap" rel="stylesheet">


      </head>

      <body>
        <form method="post">
<input type="search" name="ip_address" placeholder="enter ip address" required>
<br>
<input type="submit" value="search">

</form>





<?php

$user_ip = "" /*'197.210.78.183' /*$_SERVER['REMOTE_ADDR']*/;

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $user_ip = $_POST["ip_address"];

$reuest_uri ='https://api.ipfind.com';


$url = $reuest_uri . "?ip=". $user_ip;
$document = file_get_contents($url);
$result = json_decode($document, true);

if (!empty($result)){

$country_name = $result['country'];

$region_code = $result['country_code'];

   $region_name = $result['region'];

   $continent = $result['continent'];

   $city = $result['city'];

   $zip_code = $result['region_code'];

   $time_zone = $result['timezone'];

   $currency = $result['currency'];

   $longitute = $result['longitude'];

   $latitude = $result['latitude'];

   $languages = $result['languages'];
   $languages =implode(",",$languages);

   echo "Country name: " .$country_name ."<br>" . "Longitute: ".$longitute ."<br>" ."Continent: " .$continent."<br>" . "Region name: " .$region_name ."<br>"."City: " .$city. "<br>"."Time zone:". $time_zone;

echo "<br>" ."Currency: " . $currency ."<br>". "Zip_code: ".$zip_code ."<br>"."Langauge: ".$languages . "<br>"."Latitude ".$latitude;

if(errno == 400){
    echo "failed";
}

}else{

   trigger_error( "invalid ip address",E_USER_WARNING);
}
}else{

   trigger_error("error occurd",E_USER_WARNING);
}
/*
$ch = curl_init($apiURL);

curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);

$apiResponse = curl_exec($ch);

curl_close($ch);

$ipDATA = json_decode($apiResponse, true);

if(!empty($ipData)){
    
   $country_code = $ipData ['country_code'];


   $country_name = $ipData["country_name"];

   $region_code = $ipData['country_code'];

   $region_name = $ipData['region_name'];

   $city = $ipData['city'];

   $zip_code = $ipData['zip_code'];

   $time_zone = $ipData['time_zone'];

   echo $country_name ."<br>" . $country_code ."<br>" . $region_name ."<br>".$city. "<br>". $time_zone;



}else{

    echo "no result found try using a valid ip address";
}
*/

?>