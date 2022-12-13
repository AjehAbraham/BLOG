<?php
$email ="";

if($_SERVER["REQUEST_METHOD"]== "POST"){

    $email =$_POST["email"];

if (filter_var( $_POST["email"],FILTER_VALIDATE_EMAIL)){
    echo "valid email format ";
}else{
    die("invalid email format");
}

}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta  name ="viewport"content="width=device-width,initial-scale=1.0">
    <link href="form style.css" rel="stylesheet">
</head>
<body>

<h1> Forgot password</h1>
    <form method="post">
    
        <label for="name"><b>Email:</b></label>
        <br>
        <input type="email" name="email"  required >
       

        <input type="submit">
        </form>

    