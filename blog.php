
<?php include __DIR__.("/session.php"); ?>

<?php include __DIR__.("/header.php"); ?>

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
<title>Blog</title>

      </head>
<body>


<style>
    html{
        font-weight: lighter;
    }
    body{
        margin: 0;
        color: #111;
        font-family: 'montserrat';
    font-size: 18px;
    }
   .related-result a:link{
        color: blue;
    }
  .related-result  a:active{
        color: darkblue;
    }
   .related-result a:visited{
        color: red;
    }
    .blog-post-container{
margin-left: auto;
margin-right: auto;
display: block;
width: 95%;
    }
    .blog-post-container p{
        text-align: center;
        font-weight: lighter;
    }
    .blog-post-container h1{
        text-align: center;
    }
    .blog-post-container h2{
        text-align: center;
    }
    .blog-post-container h3{
        text-align: center;
        color: rgba(210,0,0.9);
    }
    .blog-post-container h4{
        text-align: center;
        color: rgba(210,0,0.9);
        margin-bottom: -20px;
    }
    .blog-post-container h5{
        text-align: center;
        color: rgb(0,0,56);
        margin-bottom: -20px;
    }
    .blog-post-container i{
        color: rgb(0,0,56);
        text-align: center;
        font-size: 28px;
        margin-top: 7px;
        margin-bottom: 7px;
    }
    .main-post-container-seprator{
        width: 100%;
        border: 3px solid #ccc;
        margin-bottom: 20px;
    }
 img{   
    height: 100px;
    border-radius: 50%;
    border: 3px solid #ccc;
    /*
  margin-left: auto;
  margin-right: auto;*/
  margin: 10px;
    display: block;
    border: 5px solid #ccc9;
 }
 .comment-container p{
     margin-left: 5px;
     font-weight: lighter;
 }
 .comment-container h1{
     margin-left: 5px;
 }
 .comment-container h3{
     color: white;
     background-color: rgba(210,0,0,0.9);
     padding: 10px 10px;
    box-shadow: 0px 16px 8px rgba(0,0,0,0.2);
     margin-bottom: 10px;
     margin-left: auto;
margin-right: auto;
display: block;
width: 90%;
 }
 .comment-container a:link{
     color: red;
 }
 .comment-container a:visited{
     color: red;
 }
 
 .Answers-box-container h3{
        box-shadow: 0px 16px 8px rgba(0,0,0,0.2);
        width: 90%;
margin-left: auto;
margin-right: auto;
display: block;
background-color: rgba(210,0,0,0.9);
color: white;
padding: 10px 10px;
    
    }
    .Answers-box-container p{
        margin-left: 5px;
    }
    .Answers-box-container a:link{
        color: red;
    }
    .Answers-box-container a:visited{
        color: red;
    }

    </style>
    
    

<?php

// SHOW RESULT 

$search_result = $_GET['id'];

if(isset($search_result)){


    include __DIR__.("/connection.php");

    $sql = ("SELECT * FROM Question_answers
            
    WHERE id LIKE '%".$search_result."%'"); 
    
    
    $result = $conn -> query($sql);
    
    if($result -> num_rows > 0){
    while($row = $result -> fetch_assoc()){
    
        echo "
        <div class='blog-post-container'>
        
        <h1>" .$row["Title"]. "</h1>";

echo "<h4>Author's name: ".$row["Author_name"]."</h4>";

echo "<h5>Created on: ".$row["Post_date"]."</h5>";


echo "<h5>Category: ".$row["Category"]."</h5>";

str_replace("{bold}","<b>", $row["Question"]);

$content = $row["Question"];


echo "<p><b style='margin-bottom: 25px'>Question(s):</b><br> 
<i class='fa fa-share'onclick='share()'></i>
<div class='main-post-container-seprator'>
</div>




". str_replace('{bold}','<b>', $content); /*$row["Question"]).*/"</p></div>";
 
// END OF SERACH RESULT

//FETCH QUESTION ANSWERS BASE ON EACH POST//

 
$fetch_answers = "SELECT * FROM Question_Answer_table WHERE Post_id = $row[id] 
    
     ";

     $answers_result = $conn -> query($fetch_answers);

     if ($answers_result ->  num_rows > 0){
         
         echo "<h1 style='border-top: 2px solid #ccc;margin-top: 50px;font-weight: bold'>ANSWERS</h1>";

while ($post_asnwers = $answers_result -> fetch_assoc()){

   $selct_user_name ="SELECT * FROM register_db WHERE id ='$post_asnwers[User_id]'";


   $get_users = $conn -> query ($selct_user_name);

   if ($get_users ->  num_rows > 0){

    while($answers_user_data = $get_users -> fetch_assoc()){


        echo "<div class='Answers-box-container'><h3>". $answers_user_data['First_name']. " "
        . $answers_user_data['Last_name']."<br></h3><p>".
    $post_asnwers['Answers'].
    "<br>".
    "<b>Date:". " ". $post_asnwers['Date']."</b><br><a href='editanswer.php?id=$post_asnwers[id]'>Edit</a>".
        
        "</p> </div>";
    }
  
   }
}
}else{
    echo "<p>No answer/s yet,be the first to Answer.</p>";
}




//END OF QUESTION ANSWERS RESULT//

include __DIR__.("/Answer question.php");



include __DIR__.("/reply post.php") ;




include __DIR__.("/connection.php");

// SHOW USERS COMMENT  //

// AND USER NAME 
//
$mysqli_comment = ("SELECT * FROM  General_post_comment

 WHERE Post_id  ='$row[id]' ");

 $comment_result = $conn -> query ($mysqli_comment);
 
 if($comment_result -> num_rows > 0){
    echo "<p><b>Comments:</b> </p>";
    

while($comment_result_row = $comment_result -> fetch_assoc()){
    
    $check_user = ("SELECT * FROM register_db WHERE id = '$comment_result_row[User_id]' ");
    
    $check_user = $conn -> query ($check_user);
    


if ($check_user -> num_rows > 0){
    while($check_user_result = $check_user -> fetch_assoc()){
        
    $check_profile = ("SELECT * FROM Profile_photos WHERE User_ids = '$comment_result_row[User_id]' ");
    

    $check_profile = $conn -> query($check_profile);
    
    if ($check_profile ->  num_rows > 0){
        
        while($show_user_photo = $check_profile -> fetch_assoc()){
        
            $show_user_photo = 'uploads/'
            .$show_user_photo[image_path];
            
        
        }
    
    }
    
        
       echo   "</div>
       <div class='comment-container'>
       <h3>"
         .$check_user_result['First_name']
 . " " .$check_user_result['Last_name']. "</h3><p>" .$comment_result_row['Comment']."<br><b style='color: black'> <a href='editcomment.php?id=$comment_result_row[id]'>Edit</a></b>" ."</p></div>";
    }
    
}
}
 }else{
    echo "<p>No comment,be the first to comment</p>";

}


// END OF USER DETAILS



// SHOW RELATED SEARCH RESULT //


$mysqli = ("SELECT * FROM  Question_answers WHERE Category  ='$row[Category]' ");

 $related_result = $conn -> query ($mysqli);
 
 if($related_result -> num_rows > 0){
    echo "<p>Related result: </p>";

while($related_result_row = $related_result -> fetch_assoc()){


    echo "<div class='related-result'><p style='color: #111;'><a href=blog.php?id=$related_result_row[id]>" .$related_result_row ["Title"]. ".</a></p></div>";
 }
 }

    }
    }
    else{
        echo "<p style='text-align: center;'>no result found</p>";
    }

}else{
    echo "<p style='text-align: center'>An error has occur</p></div>";
}




 
?>
<scirpt src="blog.js"></scirpt>

<?php include __DIR__.("/footer.php"); ?>