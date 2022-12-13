<?php include __DIR__.("/session.php") ?>


<?php include __DIR__.("/header.php") ?>


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
<title>Blog post</title>

      </head>
<body>


</div>

<style>
    .show-post-container h1{
        margin-top: 40px;
        box-shadow: 0px 16px 8px 0px rgba(0,0,0,0.2);
        color: white;
        font-weight: lighter;
        background-color: rgba(210,0,0,0.9);
        padding: 10px 10px;
        text-align: center;
        margin-left: auto;
        margin-right: auto;
        display: block;
        width: 90%;
    }
    .show-post-container p{
        
        margin-left: 5px;
    }
    .show-post-container  a:link{
        color: blue;
        
    }
    .show-post-container p a:visited{
        color: red;
    }/*
    .show-post-container  a:active{
        color: #111;
    }*/
</style>
</div>

<?php 

include __DIR__.("/connection.php");

$sql = "SELECT * FROM Question_answers ";

$Result = $conn -> query($sql);

if ($Result -> num_rows > 0){
    
    echo "<div class='show-post-container'><h1>BLOG POST</h1>";
    
    while($blog_post = $Result -> fetch_assoc()){
        
        echo "
        
        <p><a href='blog.php?id=$blog_post[id]'>". $blog_post['Title']. "</a></br></p>
        </div>
        "; 
        
    
    }
}



?>





<?php include __DIR__.("/footer.php") ?>