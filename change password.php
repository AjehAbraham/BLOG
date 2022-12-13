
<script>
    myvar =setTimeout(loadprofile,3000);
function loadprofile(){

window.location.href='profile.php';

}
   if(window.history.replaceState){

        window.history.replaceState(null,null,window.location.href);

    </script>
    

<?php
$is_valid = false;
session_start();

if(isset($_SESSION["user_id"])){

    include __DIR__. ("/connection.php");

$sql = "SELECT * FROM register_db
WHERE id = {$_SESSION["user_id"]}";

$result = $conn -> query($sql);

$user = $result -> fetch_assoc();

}else {
   header("location:login.php");
   exit;
}


?>

<?php if(isset($user)) {

$old_password = $new_password= $confirm_password="";

if ($_SERVER["REQUEST_METHOD"]== "POST"){

$old_password =$_POST["old_password"];

$new_password = $_POST["new_password"];

$confirm_password = $_POST["confirm_password"];

if (password_verify($old_password,$user["Password"])){

    echo "<p class='correct'> old password match </p>";

    if($new_password == $confirm_password){
        echo "<p class='correct'>new password match</p>";
        $hash = password_hash($new_password,PASSWORD_DEFAULT);
       
        $sql = "UPDATE register_db SET Password = '$hash' WHERE id = $user[id]";
        if ($conn -> query($sql)){
            
            $user["Email"] = $email;
            
            $subject = 'Welcome message';

$header = "from :developblog";

$header .= 'MIME-Version: 1.0' . "\r\n";
$header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

$message = '<p style="background-color: rgb(0,0,56);color: rgba(210,0,0,0.9);text-align: center;padding: 10px 10px;border-radius: 2rem;margin-left: auto;margin-right: auto;display: block; width:90%>Developblog</p>';

$message .= '<p>Hi chief</p>';

$message .='<p>Your password has been change successfully.</p> ';

$message .= '<p>Ip address:</p>';

$message .= $_SERVER["REMOTE_ADDR"];

$message .= '<p style="color: rgba(210,0,0,0.9);margin:10px>Teamdevelopblog</p>';

$retval = mail ($email,$subject,$message, $header);




            echo "<p class='correct'>password change succesfully </p>>";
        }else{
            echo "<p class='wrong'>fail to change password</p>";
        }
    
    }else{
        echo "<p class='wrong'>new password does not match</p>";
    }
}else{
    echo "<p class='wrong'>WRONG PASSWORD for old password</p>";
}

}



}else{

    header("location:login.php");
}
?>


    <style>
        .correct{
            color: green;
        }
        .wrong{

            color: rgba(210,0,0,0.9);
        }
        </style>