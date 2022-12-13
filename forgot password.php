<?php

$email ="";
/*
if ( $_SERVER["REQUEST_METHOD"] !== "POST"){

die("<h1>403 forbidden</h1> <br> <p>The file you are looing for does not exist.</p>");
  
}else{
*/
if ($_SERVER["REQUEST_METHOD"] == "POST"){

$email = htmlspecialchars( filter_var($_POST["Email"],FILTER_VALIDATE_EMAIL));


if(empty($email)){

  die("<p>enter a valid email.</p>");


}else{


include __DIR__.("/connection.php");



$sql= sprintf("SELECT * FROM register_db WHERE Email LIKE '%s' ",

$conn -> real_escape_string($_POST["Email"]));

$result = $conn -> query($sql);

 $user_otp = $result -> fetch_assoc();

if(!$user_otp){
die("<h1>user does not exist</h1>");
}else{

$otp = rand(100000, 999999) ;

$subject = 'Reset password';
$header = "from :developblog";
/*
$header .= 'MIME-Version: 1.0' . "\r\n";*/
$header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$message = '<p style="text-align: center;color:rgba(210,0,0,0.9)"><b>Developblog</p></b>';
$message .= '<p style="margin:10px;color:rgba(0,210,0,0,0.9)">Hi please verify,</p>';
$message .= '<p style="text-align:center;color:white;padding:10px;font-size:23px;background-color: rgb(0,0,56)">Your otp is: ' ."$otp". '</p>';

/*$message .= print($otp)*/

$message .='<p>Please do not share these code with anyone.</p>';

$message .='<p> If you did not request for this please click <a href="https://www.developblog.tech/forgot password.php"> here</a></p>';
$message .= '<p style="color:darkblue"><b>Team develoblog</b></p>';

$retval = mail ($email,$subject,$message, $header);

if (!$retval == TRUE){
 echo "<p> fail to send otp</p>";

}else {
if(!empty($user_otp)){

  $sql=  "INSERT INTO authentication(otp,	expired, created) 
  VALUES ('".$otp."', 0, '".date("Y-m-d H:i:s")."')";

if ($conn -> query ($sql) == FALSE){

die( "<p>An error occur</p>");

}else{

echo "<p>Otp  Sent successfully</p>";

}

    echo "<p>Otp sent successfully</p>";

session_start();
   
session_regenerate_id();

$_SESSION["otp_id"] = $user_otp["id"];

$_SESSION["Email"] = $_POST["Email"];

header("location:update password.php");
exit;

}else{

echo "<p>Please enter a valid email address</p>";
}


}
}
}
}

?>

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
<link href="https://fonts.googleapis.com/css2?family=Encode+Sans:wght@300&family=Island+Moments&family=Noto+Sans:ital,wght@1,200&family=Oswald:wght@200&family=Roboto+Mono:wght@100&display=swap" rel="stylesheet">
<title>Forgot password</title>
      </head>

      <div class="form-container">
          
<a href="index.php"><i class="fa fa-home"></i></a>

        <h1>Forgot password</h1>
<form method="post" onsubmit="openLoader()">

<label for = "email"><b>Email:</b></label>

<input type="email" name="Email"  placeholder="enter mail...">
<br>
<input type="submit" value="Next">
</form>
</div>
        <div class="loader-overlay">
<i class="fa-solid fa-spinner fa-spin-pluse"></i>
</div>

<script src="form style.js"></script>

<?php include __DIR__.("/footer.php"); ?>
</body>
</html>