<?php

$severname ="localhost";
 $username = "u461810606_AjehAbraham";
 $password = "Ajeh08036295994$";
 $dbname = "u461810606_Developblog";
 
 $conn = new mysqli($severname,$username,$password,$dbname);
 
 if($conn -> connect_error){
 
     die("connection failed " .$conn -> connect_error);
 }
 
if ($_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__)==
realpath($_SERVER['SCRIPT_FILENAME'])){

      header('HTTP/1.0 403 Forbiddden',TRUE,403);
      die("<h3> 403 Access denied!</H3>The file you request for does not exist.");
}
?>