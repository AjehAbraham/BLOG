<?php

session_start();


?>

<?php 


if(isset($_SESSION["otp_id"])): ?>

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
<title>Verify otp</title>

      </head>

      <body>

      <?php 
$isvalid = false;
    $otp = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){

$otp =htmlspecialchars( $_POST["otp"]);

include __DIR__.("/connection.php");

$sql = "SELECT * FROM authentication WHERE otp='". $_POST["otp"]."'
 AND expired!=1 AND NOW() <= DATE_ADD(created, INTERVAL 1 HOUR)";

 $result = $conn -> query($sql);
 $count = $result -> fetch_assoc();
 if(!empty($count)) {
     $sqlUpdate = "UPDATE authentication SET expired = 1 WHERE otp = '" . $_POST["otp"] . "'";
     

      if (!$conn -> query($sql)){

        echo "<p class='correct'>Fail to change password.</p>>";
    }else{
   
        
     $sql_update = "UPDATE register_db SET Password = '$_SESSION[new_password]' 
     WHERE id = $_SESSION[otp_id]";

if (!$conn -> query($sql_update)){

    die("fail");
}else{
    
    $_SESSION["Email"] = $email;
    
    $subject = 'developblog-noreply';

$header = "from :developblog";

$header .= 'MIME-Version: 1.0' . "\r\n";
$header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

$message = '
<div class="email-message-container" style="background-color:rgb(0,0,56)">
    <i class="fa-solid fa-heart fa-beat" style="--fa-beat-scale: 2.0;color:white;text-align:center"></i>
<p style="color:white">Hi </p>';

$message .='<h3 style="background-color: rgba(0,210,0,0.9);font-size: 30px;color: rgba(210,0,0,0.9)">Reset password alert.</h3>
';
$message .= '<p>You are receiving this mail to inform you that your password has been change succesfully.</p>';

$message .= '<p>Ip address</p>';

$message .= $_SERVER["REMOTE_ADDR"];

$message .='<p>If you did not request for this kindly click <a href="https://www.developblog.tech/forgot password.php"> here </a> change your password or contact us immediately.</p>';

$message .='<p style="margin: 10px;color: rgb(0,0,56)">Thank you for choosing us!</p>';

$retval = mail ($Email,$subject,$message, $header);

        header("location:destroy otp.php");
        exit;
        echo "<p class='wrong'>Password change sucessfully.</p>";
}
    }

    }else{

$isvalid = TRUE; 

    }
}
?>
      
      <div class="form-container">
        <h1>Verify otp</h1>



        <?php if($isvalid == true): ?>
            <p style="text-align: center;color:red">Invalid otp</p>
            <?php else: ?>
                
                <?php endif; ?>
                
<form method="post" onsubmit="openLoader(event)">

<label for= "otp"><b>Enter otp:</b></label>

<input type="number" name="otp"  placeholder="otp..">
<br>
<input type="submit" value="verify">
<p>We have sent you an otp,if you can't find your otp kindly check your spam.</p>
</form>
</div>



        <div class="loader-overlay">
<i class="fa-solid fa-spinner fa-spin-pluse"></i>
</div>

       
<script src="form style.js"></script>



<?php else:header("location:index.php"); ?>

    <?php endif;?>


 