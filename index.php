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
<html>
<head>
    <meta charset="utf-8">
    <meta  name ="viewport"content="width=device-width,initial-scale=1.0">
    <title>Home</title>
</head>
<body>

<?php
include __DIR__ . ("/header.php");
?>


<?php
/*
 if(isset($user)): ?>

 <p>HELLO <? $user["Email"] ?><? var_dump($user)?> </p>

 <p><a href="logout.php">logout</a></p>

<?php else: ?>
    <p>click to login <a href ="login.php">login</a> or click to register <a href="register.html">sign up</a>

    <?php  endif; ?>

*/

include __DIR__ . ("/home.php");


    
    include __DIR__ . ("/footer.php");
    ?>
</body>
</html>