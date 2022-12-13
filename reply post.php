
<?php


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta  name ="viewport"content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet"  href="reply post.css" >

    <script src="https://kit.fontawesome.com/958aace4f6.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>


<div class="reply-post">
<i class="fa fa-comment" id="open-comment"></i>
</div>

<div class="form-container-rapper">

    <form  method="post" onsubmit="openLoader()">
    <textarea name="comment" id="autosize"  class="reply-post-save-comment"  tyle="width:300px;"></textarea>
<script src="https://cdnjs.cloudflare.com/ajax/libs/autosize.js/4.0.2/autosize.min.js"></script>
<script>autosize(document.querySelectorAll('#autosize'));</script>
</br>
<input type="submit" value="post">
    
</form>
</div>

<?php 


if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $comment =htmlspecialchars( $_POST["comment"]);
    if(empty($comment)){
        die("<p>Please enter a valid comment</p>");
    }

    $ip_addr = htmlspecialchars( $_SERVER["REMOTE_ADDR"]);
    
    if(empty($ip_addr)){
        die("<p>An error has occured</p>");
    }

    $date_posted =htmlspecialchars( date("Y--m-d h:as:a"));

    if (empty($date_posted)){
        die("<p>invalid  date format</p>");
    }
    $user_agent = $_SERVER["HTTP_USER_AGENT"];
    if (empty($user_agent)){
        die("<p>An error has occured</p>");
    }


    
if(isset($_SESSION["user_id"])){

    include __DIR__. ("/connection.php");

$sql = "SELECT * FROM register_db
WHERE id = {$_SESSION["user_id"]}";

$result = $conn -> query($sql);

if ($result ->  num_rows > 0){

while($user = $result -> fetch_assoc()){

}

}

}

if(!isset($_SESSION["user_id"])){

    die("<p>please login to comment.</p>");
}else if(isset($_SESSION["user_id"])){

include __DIR__.("/connection.php");

$stmt = $conn -> prepare("INSERT INTO General_post_comment(Comment,User_id,Post_id,Date_posted,Ip_adddres,Device_name)

VALUES(?,?,?,?,?,?)

    
    ");

$stmt -> bind_param("siiiis",$comment,$_SESSION["user_id"],$row["id"],$Date_posted, $ip_addr,$user_agent);

if (!$stmt -> execute()){

die("<p>An error has occur.</p>");

}else if(!isset($_SESSION["user_id"])){

die("<p>please login to comment.</p>");
}else{

echo "<p style='color: green;'>Posted succesfully</p>";

$stmt -> close();
$conn -> close();

}

}

}
/*
include __DIR__.("/connection.php"); 
$sql = "CREATE TABLE General_post_comment(
    id INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Comment TEXT NOT NULL,
        User_id INT(20) NOT NULL,
        Post_id INT(128) NOT NULL,
        Date_posted TIMESTAMP NOT NULL,
        Ip_adddres INT(15) NOT NULL,
        Device_name VARCHAR(128) NOT NULL)
    
    ";

    if ($conn -> query($sql) == TRUE){
        echo "table created";
    }else{
        die("fail". $conn_error);
    }
*/
?>

<script src="reply post.js"></script>


</html>
</body>