<?php
session_start();

if(isset($_SESSION["user_id"])){

    include __DIR__. ("/connection.php");

$sql = "SELECT * FROM register_db
WHERE id = {$_SESSION["user_id"]}";

$result = $conn -> query($sql);

$user = $result -> fetch_assoc();


$mysqli = "SELECT * FROM Profile_photos
WHERE User_ids = {$_SESSION["user_id"]}";


$result_pics = $conn -> query($mysqli);


if(! $image = $result_pics -> fetch_assoc()){
    
$error_message="no image found";

}else{

    $imgageURL = 'uploads/'.$image["image_path"];
}


}else {
   header("location:login.php");
   exit;
}


?>

<?php if(isset($user)): ?>

<!DOCTYPE html>
<html lang="eng_US">
  <head>
   
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width,initial-scale=1.0">
          <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.debug.js"></script>
<script src="https://kit.fontawesome.com/958aace4f6.js" crossorigin="anonymous"></script>

<link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Anek+Malayalam:wght@800&family=Bungee+Spice&family=Kdam+Thmor+Pro&family=Macondo&family=Mingzat&family=Montserrat:wght@300&family=Playfair+Display:wght@400;500;600&family=Poppins:wght@300;400;500;600;700&family=Roboto+Flex:opsz,wght@8..144,100;8..144,400&family=Roboto:ital,wght@0,300;0,400;0,900;1,300&display=swap" rel="stylesheet">

<title>Profile</title>
<link rel="stylesheet" href="profile.css">
      </head>
      <body>


      <span class="material-symbols-outlined" onclick="window.history.back()">arrow_back</span></a>
      
      <a href="index.php"><i class="fa fa-home" style="font-size: 28px;float: right;color: rgba(0,0,56);"></i></a>

      <br>
<div class="header">
       <form method="post" enctype="multipart/form-data" action="process profile photo.php">
       <div class="image-conatainer">


      <img src="<?php echo 
$imgageURL ;?>" id='output' width='120px' alt=""/></div>

<p style="text-align: center;margin-bottom: -10px"></p><?php echo $error_message;?></p>

       <input type="file" id="file" name="image" onchange="loadfile(event)">
       <br>

<p><label for="file">Change picture</label></p>
<input type="submit" value="upload">
</form>

</div>



<div class="form-container">

       <p class="edit" >Edit profile</p>


<form action="process edit profile.php" method="post">
      <label for="name"><b>First name:</b></label>
        <br>
        <input type="text" id="first_name" name="First_name" readonly value=" <?php echo htmlspecialchars ($user["First_name"]); ?>">
        

<br>
        <label for="name" ><b>Last name:</b></label>
        <br>
        <input type="text" name="Last_name" id="last_name" readonly  value ="<?php echo htmlspecialchars ($user["Last_name"]) ?>">
       <br>

        <label for="name"><b>Email:</b></label>
        <br>
        <input type="email" disabled value=<?php echo htmlspecialchars ($user["Email"]) ?>>
        <br>
<input type="submit"  class="submit-btn" value="Save change">
</form>
</div>


<p class="forgot_password">Change password</p>


<p onclick="alert('Opps! you cannot delete your account at the moment check back soon.')">Delete account</p>


<div class="change-password_container">
<span class="material-symbols-outlined" id="close-container_btn">cancel</span>
<br>

<form method="post" action="change password.php">
  <label for="old_password"><b>Old password</label>
  <br>
<input type="password" name="old_password" required>
<br>

<label for="new_password"><b>New password</label>
  <br>
<input type="password" name="new_password" required>
<br>

<label for="new_password"><b>Confirm  password</label>
  <br>
<input type="password" name="confirm_password" required>
<br>
<input type="submit" value="change">
</form>

</div>

<div class="loader-overlay">
<i class="fa-solid fa-spinner fa-spin-pluse"></i>
</div>



<script src="profile.js"></script>

<?php else:?>
<?php header("location:login.php") ?>

<?php endif; ?>