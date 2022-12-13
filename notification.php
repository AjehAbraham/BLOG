
<?php
session_start();

if(isset($_SESSION["user_id"])){

    include __DIR__. ("/connection.php");

$sql = "SELECT * FROM register_db
WHERE id = {$_SESSION["user_id"]}";

$result = $conn -> query($sql);

$user = $result -> fetch_assoc();

}else{

header("location:login.php");
exit;

}
include __DIR__.("/header.php");
?>

<!DOCTYPE html>
<html lang="eng_US">
  <head>
    <link rel="stylesheet" href="notification.css">
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width,initial-scale=1.0">     
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.debug.js"></script>
<!--link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Anek+Malayalam:wght@800&family=Bungee+Spice&family=Kdam+Thmor+Pro&family=Macondo&family=Mingzat&family=Montserrat:wght@300&family=Playfair+Display:wght@400;500;600&family=Poppins:wght@300;400;500;600;700&family=Roboto+Flex:opsz,wght@8..144,100;8..144,400&family=Roboto:ital,wght@0,300;0,400;0,900;1,300&display=swap" rel="stylesheet"-->
<link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Encode+Sans:wght@300&family=Island+Moments&family=Noto+Sans:ital,wght@1,200&family=Oswald:wght@200&family=Roboto+Mono:wght@100&display=swap" rel="stylesheet">

      </head>
<body>



<div class="notification_container">

<?php


include __DIR__. ("/connection.php");


$mysqli = "SELECT * FROM General_post_comment WHERE User_id='$_SESSION[user_id]'";


$comment_result = $conn -> query ($mysqli);

if ($comment_result -> num_rows > 0){
  echo "<h1>Comment </h1>";

while($comments = $comment_result -> fetch_assoc()){

$sql_post_title = "SELECT Title FROM Question_answers WHERE id = '$comments[Post_id]'";

$post_title_result = $conn -> query ($sql_post_title);

if ($post_title_result -> num_rows > 0 ){

  while($post_title = $post_title_result -> fetch_assoc()){




echo "
<h2>". $post_title['Title']."</h2>

<p><b><a href=editcomment.php?id=$comments[id]><b>Edit</a></b>" ." ". $comments['Comment'] . "<br></p>";


}

}
}


}else{
  echo "<p style='text-align: center'>NOTIFICATION<br>You don't have any comment.</p>";
}



?>

</div>



  
<?php include __DIR__.("/footer.php"); ?>


      </html>
</body>