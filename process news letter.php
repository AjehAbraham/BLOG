<script>
    myvar =setTimeout(loadprofile,3000);
function loadprofile(){

window.location.href='index.php';

}
</script>


<?php

$email ="";

if($_SERVER["REQUEST_METHOD"] == "POST"){

$email = ($_POST["Email"]);

filter_var($email,FILTER_VALIDATE_EMAIL);

    $ip_address =htmlspecialchars( $_SERVER["REMOTE_ADDR"]);

    $date =htmlspecialchars( date("Y-m-d h:i:sa"));
    if(empty($email)){
        die("<p>Please enter a valid email address</p>");
    }else{

    include __DIR__.("/connection.php");

$stmt =$conn -> prepare ("INSERT INTO News_letter_sub(Email,ip_add,date_reg)
VALUES(?,?,?)");

$stmt -> bind_param("sss", $email, $ip_address,$date);

if (!$stmt -> execute()){
    
        die("You have already subscribe to this service.");
    }else{
        
    $stmt -> execute ();
    echo "<p style ='color:rgba(0,210,0,0.9);'> You have successfully subscribe.please click <a href= 'main page.php'>here</a> to return back to main page.</p>";
    
}
}
}
$stmt -> close();
$conn -> close();
?>

