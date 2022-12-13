<?php
session_start();


?>

<?php 
if(isset ($_SESSION["otp_id"] )): ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta  name ="viewport"content="width=device-width,initial-scale=1.0">
    <link href="form style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Encode+Sans:wght@300&family=Island+Moments&family=Noto+Sans:ital,wght@1,200&family=Oswald:wght@200&family=Roboto+Mono:wght@100&display=swap" rel="stylesheet">
<title>Update password</title>
</head>
<body>

<div class="form-container">
<h1> Reset password</h1>
    <form method="post" onsubmit="openLoader(event)">
    
        <label for="name"><b>New  password:</b></label>
        <br>
        <input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z].*{8}" minlength="8" maxlength="20" name="password"  required >
       
<br>

<label for="name"><b>Confirm  password:</b></label>
        <br>
<input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z].*{8}" minlength="8" maxlength="20" name="confirm-password" required>
<br>  


<div class="password-notice"><b>Note:</b>Password must contain at least one uppercase,one lowercase and one special character and must be at least 8 charcter in length.</div>

        <input type="submit" value="Send">
        </form>
</div>

        <div class="loader-overlay">
<i class="fa-solid fa-spinner fa-spin-pluse"></i>
</div>


<?php
$password = $confirm_password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $password =htmlspecialchars( $_POST["password"]);

$confirm_password = htmlspecialchars($_POST["confirm-password"]);

$hash = password_hash($password, PASSWORD_DEFAULT);

 if (!$password == $confirm_password){

echo "An error has occured";
die("<p>Password does not match</p>");

 }else{
if ($password == $confirm_password){

    $hash = password_hash($password, PASSWORD_DEFAULT);
    
 $_SESSION["new_password"] = $hash;

echo "password match ";
header("location:Verify otp.php");
exit;


}else{
    echo "<p style='color:rgba(210,0,0,0.9);text-align:center'>Password does not match";
}

 }

}

?>

  
        <div class="loader-overlay">
<i class="fa-solid fa-spinner fa-spin-pluse"></i>
</div>


<script src="form style.js"></script>



<?php include __DIR__.("/footer.php"); ?>
<?php else: header("location:index.php") ?>

<?php endif; ?>