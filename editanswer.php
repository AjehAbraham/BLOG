<?php

include __DIR__.("/session.php");


include __DIR__.("/header.php");

?>

<!DOCTYPE html>
<html lang="eng_US">
  <head>
    <link rel="stylesheet" href="form style.css">
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width,initial-scale=1.0">     
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.debug.js"></script>

<link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Encode+Sans:wght@300&family=Island+Moments&family=Noto+Sans:ital,wght@1,200&family=Oswald:wght@200&family=Roboto+Mono:wght@100&display=swap" rel="stylesheet">
<title>Edit Post Answers</title>

      </head>
<body>





<?php

$edit_id =htmlspecialchars($_GET["id"]);


if(!isset($_SESSION["user_id"])){
    
    header("location:login.php");
    exit;
    die("<p style='color: red;text-align: center'>Please login</p>");
}else{
    include __DIR__.("/connection.php");
    
    $mysqli = "SELECT *  FROM Question_Answer_table WHERE  User_id='$_SESSION[user_id]' AND  id='$edit_id'";
    
    $edit_result = $conn -> query ($mysqli);
    
    if ($edit_result -> num_rows > 0){
        while ($show_result = $edit_result -> fetch_assoc()){
            echo "
            <div class='form-container'>
            
            <form method='post'>
            
            <textarea cols='12' rows='10' name='edit-answer'>$show_result[Answers]</textarea>
            <br>
            <input type='submit' value='Update post'>
            
            </form>
            </div>
            
          
            ";
            
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $update_comment = htmlspecialchars($_POST["edit-answer"]);
                
                include __DIR__.("/connection.php");
                
                $update_record = "UPDATE Question_Answer_table SET Answers ='$update_comment' WHERE id ='$edit_id' AND User_id = '$_SESSION[user_id]'";
                if (!$conn -> query($update_record)){
                    die("<p style='color: red;text-align: center'>An erro has occur or you're trying to edit a document that you did'nt create.</p>");
                }else{
                    echo "<p style='color: green;text-align: center'>Updated successfully click <b  onclick='window.history.back(-2)'>here</b> to go back.</p>";
                }
            }
        }
    }
    
}




?>







<?php include __DIR__.("/footer.php"); ?>