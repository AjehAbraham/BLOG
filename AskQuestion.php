<?php

include __DIR__.("/session.php");


if(!isset($_SESSION["user_id"])){

   header("location:login.php");
   exit;
}
include  __DIR__.("/header.php");
?>

<script>

if(window.history.replaceState){

    window.history.replaceState(null,null,window.location.href);

}
</script>

<!DOCTYPE html>
<html lang="eng_US">
  <head>
    <link rel="stylesheet" href="home.css">
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width,initial-scale=1.0">     
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.debug.js"></script>

<link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Encode+Sans:wght@300&family=Island+Moments&family=Noto+Sans:ital,wght@1,200&family=Oswald:wght@200&family=Roboto+Mono:wght@100&display=swap" rel="stylesheet">
<title>Ask Question</title>

      </head>
<body>

<style>
    input[type=text]{
        border: 2px solid #ccc;
    }
    textarea{
        width: 80%;
        margin-left: auto;
        margin-right: auto;
        display: block;
        border: 2px solid #ccc;
        font-size: 20px;
    }
    select{
        width: 65%;
        margin-left: auto;
        margin-right: auto;
        display: block;
    }
    input[type=submit]{
        width: 90%;
        margin-left: auto;
        margin-right: auto;
        display: block;
        color: white;
        font-size: 20px;
        padding: 9px 9px;
        background-color: rgba(210,0,0,0.9);
    }
</style>


      <?php 
      /*

$mysqli = include __DIR__.("/connection.php");

$mysqli = "SELECT  Author_name,
Title,Category,Question,code,User_id_col,Post_date FROM Question_answers ";

$post_result = $conn -> query($mysqli);
echo "<p> Topics:</p>";

if ($post_result -> num_rows > 0){

    while ($rows_data = $post_result -> fetch_assoc()){
       echo  $rows_data["Title"]. "<br>";
    
    }
}else{
    die("error");
}
*/
?>

<div class="ask-question-container">

    <?php if(isset($user)):?>
        <form method="post">
    <input type="hidden" name="full_name" required  value="<?php echo $user["First_name"]. " ".$user["Last_name"] ;?>">

    <br>
    <label for="ttitle"><b>Title</b></label>
    <input type="text" name="title" required>
    <br>


    <?php else: ?>
        <p>Please you need to have an account to ask a question</p>
        <?php endif; ?>
        <form method="post">
<label for="question-type"><b>Please select a question category:</b></label>
<br>
<select name="question_category"required>
<option></option>
<option>Html</option>
<option>Css</option>
<option>Javacript</option>
<option>Java</option>
<option>Jquery</option>
<option>React</option>
<option>Python</option>
<option>C#/C++</option>
<option>PHP</option>
<option>Mysql</option>
<option>Others</option>
</select>
<br>
<label for="question"><b>Enter you questsion here:</b></label>
<br>
<textarea cols="25"rows="10"name="question" required id="auto_resize_box"></textarea><script src="https://cdnjs.cloudflare.com/ajax/libs/autosize.js/4.0.2/autosize.min.js"></script>
<script>autosize(document.querySelectorAll('#auto_resize_box'));</script>
      <br>

   <input type="submit" value="post">
    </form>

</div>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST"){

$full_name = $user["First_name"] ." ". $user["Last_name"] ;
$full_name = filter_var($full_name,FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);

$category =filter_var( $_POST["question_category"],FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_HIGH);


$question = htmlspecialchars( $_POST["question"]);

$Title = htmlspecialchars($_POST["title"]);

$Post_date =htmlspecialchars( date("Y-m-d h:i:sa"));


include __DIR__ .("/connection.php");
/*
$sql_conn = "CREATE TABLE Question_answers(
    id INT(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Author_name VARCHAR(128) NOT NULL,
    Title VARCHAR(128) NOT NULL,
    Category VARCHAR(12) NOT NULL,
    Question TEXT NOT NULL,
    Code TEXT ,
    User_id_col INT(20),
    Post_date VARCHAR(12) NOT NULL
    )";
*/
$stmt = $conn -> prepare ("INSERT INTO  Question_answers(
    Author_name,
Title,Category,Question,code,User_id_col,Post_date)
VALUES(?, ?, ?, ?, ?, ?, ?)

 ");
  

$stmt -> bind_param("sssssss",$full_name,$Title,$category,$question,
$code,$_SESSIOM["user_id"],$Post_date);

if ($stmt == TRUE){
    echo "<p style='text-align: center;color: green;'>Posted successfully</p>";
}else{
    echo "<p style='text-align: center;color: red;'>An error has occur,please try again shortly</p>";
}
$stmt -> execute();
$conn ->close();
}



include  __DIR__.("/footer.php");
?>

</html>
</body>