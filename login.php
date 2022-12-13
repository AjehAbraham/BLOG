
<?php

$is_invalid =false;


include __DIR__.("/connection.php");  

if($_SERVER["REQUEST_METHOD"] == "POST"){


   $sql = sprintf("SELECT * FROM register_db 
   WHERE Email= '%s'",
   
   $conn -> real_escape_string($_POST["Email"]));
   
   $result = $conn -> query($sql);

   $user = $result -> fetch_assoc();

if($user){
    if(password_verify($_POST["Password"], $user["Password"]) == "password_hash"){
   session_regenerate_id();

       session_start();/*
       
session_start([
    'cookie_lifetime' => 86400*40,
]);*/
       $_SESSION["user_id"] = $user["id"];

       header("location:index.php");
       exit;
    }else{

      $is_invalid=true;
    }
}else{

  $is_invalid=true;
}
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    
    <meta  name ="viewport"content="width=device-width,initial-scale=1.0">
    
    <link rel="stylesheet" href="form style.css">
    
<link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Encode+Sans:wght@300&family=Island+Moments&family=Noto+Sans:ital,wght@1,200&family=Oswald:wght@200&family=Roboto+Mono:wght@100&display=swap" rel="stylesheet">

 <script src="https://kit.fontawesome.com/958aace4f6.js" crossorigin="anonymous"></script>

    <title>Login</title>
</head>
<body>
<div class="form-container">
<h1>Hi,Welcome back.</h1>
<h1>Login</h1>


    <?php if($is_invalid==true):?>

        <p style="text-align:center;color:red;font-size:20px;">invalid username or password.</p>
        
        <?php else: ?>
         
        <?php endif; ?>
        <form method="post" onsubmit="openLoader(event)">

    <label for="email"><b>Email:</b></label>
    <br>
    <input type="email" value="<?php echo  isset($_POST['Email']) ? $_POST['Email'] : '' ?>" name="Email" required > 
    <br>
    <label for="password"><b>Password:</b></label>
    <br> 
    <input type="password" name="Password"  required >
    <br>
    <input type="submit" class="submit-btn">

</form>
<p><a href="forgot password.php">Forgot password</a></p>

<p>If you don't have an account click <a href="register.php">here </a> to register</p>
        </div>
        </div>


        <div class="loader-overlay">
<i class="fa-solid fa-spinner fa-spin-pluse"></i>
</div>



<script src="form style.js"></script>

</html>
    </body>
