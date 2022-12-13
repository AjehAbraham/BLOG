
<script>
    myvar =setTimeout(loadprofile,3000);
function loadprofile(){

window.location.href='index.php';

}
</script>
<?php

$email = $complains ="";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = htmlspecialchars(filter_var( $_POST["email"], FILTER_VALIDATE_EMAIL));

$complains = htmlspecialchars( filter_var ($_POST["complain"], FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_FLAG));

$ip_add = htmlspecialchars($_SERVER['SERVER_ADDR']);

$Date_sent = htmlspecialchars(date("Y.m.d h:i:sa"));

    include __DIR__ .("/connection.php");


$stmt = $conn -> prepare("INSERT INTO Customers_complains(Email,Complains,Ip_add,Date_sent)

VALUES(?, ?, ?, ?)");

 $stmt ->bind_param("ssss",$email,$complains,$ip_add,$Date_sent);

if (!$stmt -> execute ()){
    die("Fail to send message.");
    
}else{
    $stmt -> execute();
    
    echo "Message sent succefully.";
}


/*
include __DIR__ . ("/connection.php");

$sql = "CREATE TABLE Customers_complains(
    
    id  INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Email VARCHAR(100) NOT NULL,
    Complains VARCHAR(128) NOT NULL,
    Ip_add VARCHAR(12) NOT NULL,
    Date_sent VARCHAR(15) NOT NULL
    )";

if ($conn -> query ($sql) == TRUE){

    echo "table created sucessfully<br> ";
}else{

    echo $conn -> error;


}*/
}

$stmt -> close();
$conn -> close();
?>