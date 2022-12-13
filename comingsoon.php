<?php
session_start();

if(isset($_SESSION["user_id"])){

    include __DIR__. ("/connection.php");

$sql = "SELECT * FROM register_db
WHERE id = {$_SESSION["user_id"]}";

$result = $conn -> query($sql);

$user = $result -> fetch_assoc();

}
?>

<!DOCTYPE html>
<html lang="eng_US">
  <head>
    <link rel="stylesheet" href="home.css">
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width,initial-scale=1.0">     
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.debug.js"></script>

<link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Encode+Sans:wght@300&family=Island+Moments&family=Noto+Sans:ital,wght@1,200&family=Oswald:wght@200&family=Roboto+Mono:wght@100&display=swap" rel="stylesheet">

      </head>
<body>


<title>Coming soon</title>

      </head>
<body>

<?php include __DIR__.("/header.php"); ?>

<div class="message-body-container">
<p> Coming soon</p>
</div>



<style>
.message-body-container{
    margin-top: 40px;
    margin-bottom: 40px;
    text-align:center;
    font-size: 30px;
    background-image: url("images\comingsoon.jpeg");
    background-repeat: no-repeat;
    background-size: cover;
    padding: 100px;
}
</style>
<?php include __DIR__.("/footer.php"); ?>


</html>
</body>