

<script>

if(window.history.replaceState){

    window.history.replaceState(null,null,window.location.href);

}
</script>


<?php

include __DIR__.("/session.php"); 

include __DIR__.("/header.php") ;

if (!isset($_SESSION["user_id"])){

    header("location: login.php");

    exit;
}


?>

<!DOCTYPE html>
<html lang="eng_US">
  <head>
    <link rel="stylesheet" href="form style.css">
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



<?php 

$comment_id = $_GET["id"];

if(!isset($comment_id)){

    echo ("<p style='color: red;text-align: center';>The file you're looking for does not exist or has been moved.</p>");
}else{

include __DIR__.("/connection.php");

$mysqli = "SELECT Comment FROM General_post_comment WHERE id = '$comment_id'";

$comment_result = $conn -> query ($mysqli);

 if ($comment_result -> num_rows > 0){

while ($fetch_comment = $comment_result -> fetch_assoc()){

    

echo "
<div class='form-container' onsubmit='openLoader()'>

<form method ='post'>



<textarea cols='20' rows='10' name='update_comment'>$fetch_comment[Comment]</textarea>

<br>
<input type='submit' value='Update' onsubmit='openLoader(event)'>

</form>
</div>

";


}

 }
 else{
    
    die("<p style='color: red;text-align:center'>An error has occur.Please   check your notifications.</p>");
}

}




if ($_SERVER["REQUEST_METHOD"] == "POST"){

$update_comment ="";

$update_comment = htmlspecialchars($_POST["update_comment"]);

if(empty($update_comment)){

    die("<p>Comment cannot be empty,please enter a valid comment.</p>");
}else{

    
include __DIR__.("/connection.php");

/*
$verify_user = "SELECT * FROM  general_post_comment WHERE id ='$update_comment' 
AND User_id ='$_SESSION[user_id]'";

$verify_result = $conn -> query ($verify_user);

if ($verify_result -> num_rows > 0){

while ($verify_user_result = $verify_result -> fetch_assoc()){

    echo "<p> valid</p>";
    var_dump($verify_user_result);
}

}else{
    die("<p style='color: red;text-align: center;'>Fatal error please check your notification.</p>");
}

*/

$comment  =( "UPDATE  General_post_comment SET Comment ='$update_comment'

WHERE id = '$comment_id' AND User_id = '$_SESSION[user_id]'


 ");

 if (!$conn -> query($comment) == TRUE){
    
    die("<p>Fail to post comment,please try again.</p>");

 }else{

    echo "<p style ='color: green;text-align: center;'> Updated successfully</p>";
 }


}


}else{
   /* die("<p style='color: red;text-align: center;'>Fail to post comment,please try again.</p>");
*/}

?>


<script src="form style.js"></script>




<?php include __DIR__.("/footer.php"); ?>