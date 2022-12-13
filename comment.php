<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__)==
realpath($_SERVER['SCRIPT_FILENAME'])){

      header('HTTP/1.0 403 Forbiddden',TRUE,403);
      die("<h1> 403 Access denied!</h1>The file you are requesting for does not exist.");
}


include __DIR__. ("/connection.php");

$sql = "SELECT comment FROM post_comments";


$result = $conn -> query($sql);

if($result -> num_rows > 0){


    while($comment = $result -> fetch_assoc()){

        echo "<p>". $comment["comment"] ."</p>";

    }
}



?>