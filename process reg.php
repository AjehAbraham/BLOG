
<script>

if(window.history.replaceState){

    window.history.replaceState(null,null,window.location.href);

}
myvar =setTimeout(loadprofile,3000);
function loadprofile(){

window.location.href='register.php';

}

</script>
<?php

$First_name = $Last_name = $Email = $Password ="";

if($_SERVER["REQUEST_METHOD"] == "POST"){


   if($First_name = filter_var( $_POST["First_name"], FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH)){

   }else{
die("invalid name format");

   }

   if( $Last_name = htmlspecialchars( filter_var( $_POST["Last_name"],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH))){


   }else{
    die("invalid name format");
   }
 
   if($Email = htmlspecialchars(filter_var($_POST["Email"],FILTER_VALIDATE_EMAIL))){

   }else{
die("inavlid email format");

   }

    $Password = htmlspecialchars ($_POST["Password"]);

    $hash = htmlspecialchars(password_hash($Password, PASSWORD_DEFAULT));
include __DIR__ .("/connection.php");

$ip_add = $_SERVER["REMOTE_ADDR"];

$stmt = $conn -> prepare("INSERT INTO register_db(First_name,Last_name,Email,Password,Ip_address)
VALUES(?,?,?,?,?)");


$stmt ->bind_param("sssss", $First_name,$Last_name,$Email,$hash,$ip_add );


$subject = 'Welcome to developblog';

$header = "from :developblog";

$header .= 'MIME-Version: 1.0' . "\r\n";
$header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

$message = '
<div class="email-message-container" style="margin: 10px;
    <i class="fa-solid fa-heart fa-beat" style="--fa-beat-scale: 2.0;color:white;text-align:center"></i>
<p style="color:white">Hi </p></div>';

$message .='<h3 style="background-color: rgba(0,210,0,0.9);font-size: 30px;color: rgb(0,0,56);border-radius:2rem;padding:5px">Welcome to developblog.</h3>';

$message .= '<p style="color: rgb(0,0,56)">Thank you for joining us!</p>';

$message .= '<p>Read more about us <a href="https://www.developblog.tech">here</a></p>';
$message .='<p><b>Teamdevelopblog</b></p>';

$retval = mail ($_POST["Email"],$subject,$message, $header);

/*
if ($retval == TRUE){
    echo "mail sent sucessfully";
}else {
    echo "message fail to send";
}*/
if(!$stmt -> execute()){
    
die("Email already taken or an error has occur");

header("location:register.php");
}
else{
    
    $stmt -> execute();
    
    header("location:login.php");
exit;
}
/*else{
    $duplicate_entry = "SELECT * FROM register_db WHERE Email = $_POST[Email]";
    
    if ($duplicate_entry == $_POST["Email"]){
        
        die("Email already taken");
        exit; 
    }
    }*/
}

$stmt -> close();
$conn -> close();

?> 
