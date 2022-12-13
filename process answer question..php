
<?php

session_start();

if (!$_SESSION["user_id"]){
    header("location:login.php");
    exit;
    die("<p>Please login to answer question.click <a href='login.php'>here</a> to login.</p>");
}


if ($_SERVER["REQUEST_METHOD"] == "POST"){

$Answers =filter_var($_POST["Question_Answers"],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);

if(empty($Answers)){

    die("<p>Comment cannot be empty</p>");

}else{

 $row = $_POST["Row_id"];

 if (empty($row)){

    die("<p>An error has occur,please try again in one minute</p>");

 }else{


$ip_addr = $_SERVER["REMOTE_ADDR"];

$Date = date("Y/m/d h:i:sa");

$user_id = $_SESSION["user_id"];

include __DIR__.("/connection.php"); 

$stmt = $conn -> prepare ("INSERT INTO Question_Answer_table (
    
    User_id,Post_id,Answers,date,ip_addr
    
    )

    VALUES(?,?,?,?,?)
    
    ");

        $stmt -> bind_param("iisii",$user_id,$row,$Answers,$Date,$ip_addr);

        echo "<p style='color: green;'>Posted sucessfully click <b onclick='window.history.back()'> here</b> to go back or click <a href='index.php'>here to go back to home</a>.</p>";
        $stmt -> execute ();
    


  
}}

}else{
die("<p>An unknown error has occur click <a href='index.php'> here</a> to go back home</p>");  
    
}   
 