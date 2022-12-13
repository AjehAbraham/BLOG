<!DOCTYPE html>
<html>
<head>
<link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Island+Moments&family=Oswald:wght@200&family=PT+Serif&family=Roboto+Mono:wght@100&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <meta  name ="viewport"content="width=device-width,initial-scale=1.0">
    <link href="form style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/958aace4f6.js" crossorigin="anonymous"></script>

    <title>Register</title>
</head>
<body>
  <div class="form-container">

<a href="index.php"><i class="fa fa-home"></i></a>

<h1> Register</h1>

    <form action="process reg.php" method="post" onsubmit="openLoader(event)">
        <label for="name"><b>First name:</b></label>
        <br>
        <input type="text" name="First_name" id="validate-first_name" required onkeyup="validateFirst_name()"placeholder="First name...">
        
        <p class="validation-message1"></p>

        <label for="name"><b>Last name:</b></label>
        <br>
        <input type="text" name="Last_name"  id ="validate-last_name" onkeyup="validateLast_name()" required placeholder="Last nane...">
        <p class="validation-message2"></p>

        <label for="name"><b>Email:</b></label>
        <br>
        <input type="email" name="Email" id="validate-Email" required onkeyup=" validate_email()" placeholder="Email...">

      <p class="validate-email-message"></p>

        <label for="name"><b>password:</b></label>
        <br>
        <input type="password" onkeyup="validate_password()" id="validate-pasword" name="Password"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z].*{8}" minlength="8" maxlength="20" required placeholder="password">

        <h3 class="validation-message-password"></h3>

        <p><input type="checkbox" class="show-password">Show password</p>

        <div class="password-notice"><b>Note:</b>Password must contain at least one uppercase,one lowercase and one special character and must be at least 8 charcter in length.</div>

    <p> <input type="checkbox" name="term_condition" required>i agree to the terms and condition.</p>

        <input type="submit" class="submit-btn">
    </form>

    <p>If you have an account already please click <a href="login.php">here</a> to login.</p>
</div>

 
        <div class="loader-overlay">
<i class="fa-solid fa-spinner fa-spin-pluse"></i>
</div>
        
      
<script src="form style.js"></script>

    <script src="form validation.js"></script>
    
    <?php include __DIR__.("/footer.php"); ?>
    
    
    </html>
</body>