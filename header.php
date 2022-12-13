<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__)==
realpath($_SERVER['SCRIPT_FILENAME'])){

      header('HTTP/1.0 403 Forbiddden',TRUE,403);
      die("<h3> 403 Access denied!</H3>The file you request for does not exist.");
}
?>
<!DOCTYPE html>
<html lang="eng_US">
  <head>
    <link rel="stylesheet" href="header.css">
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width,initial-scale=1.0">
          <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.debug.js"></script>

<script src="https://kit.fontawesome.com/958aace4f6.js" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Anek+Malayalam:wght@800&family=Bungee+Spice&family=Kdam+Thmor+Pro&family=Macondo&family=Mingzat&family=Montserrat:wght@300&family=Playfair+Display:wght@400;500;600&family=Poppins:wght@300;400;500;600;700&family=Roboto+Flex:opsz,wght@8..144,100;8..144,400&family=Roboto:ital,wght@0,300;0,400;0,900;1,300&display=swap" rel="stylesheet">


      </head>

<div class="header">
      <b>DevelopBlog
<i class="fa fa-bars" style="float:right;margin-left:23px;" id="openNav-btn"></i>
</b>

<i class="fa fa-search" style="float:right;" id="openSearch-btn"></i>

<div class="search-container">
<span class="material-symbols-outlined" id="close-serach" style="float:right">cancel</span>     
<form method="post" action="search.php">

<input type="search" name="search-blog" placeholder="Search for news,post,question and answers..."> 
<input type="submit" value ="search" >

</form>


</div>

</div>

<div class="sidebar">

    <b><span class="material-symbols-outlined" style="float:right;"id="closeNav-btn"> cancel</span>
 </b>
    
 
    
    <div class="top-nav">
    <?php
 if(isset($user)): 
 
 
$mysqli = "SELECT * FROM Profile_photos
WHERE User_ids = $user[id]";

$result_pics = $conn -> query($mysqli);

if(! $image = $result_pics -> fetch_assoc()){

  $image_erro;

}else{

    $imgageURL = 'uploads/'.$image["image_path"];
}
 ?>

   <img src ="<?php echo  $imgageURL ?>" width="120px"   id="profile"/>
   
    <a href="profile.php"><input type="text" value="profile" readonly></a>

    <h4 style="text-align:center;">HI <?php echo ($user["First_name"])?>,
    <br>WELCOME BACK
 </h4>
    <?php else: ?>
   
    <?php endif; ?>
    <p>
        <a href="index.php">
        <i class="fa fa-home"></i>
     Home
</a>
</p>
<p>
        <a href="News.php">
        <i class="fa fa-book"></i>
  News
</a>
</p>

<p>
        <a href="blog post.php">
        <i class="fa fa-file"></i>
  Blog
</a>
</p>
      
      
<?php if(isset($user)): ?>
<p>
        <a href="AskQuestion.php">
        <i class="fa fa-question"> </i>
 Questions & Answers
</a>
</p>

<p>
        <a href="comingsoon.php">
        <i class="fa-solid fa-camera-rotate fa-flip"></i>
 Movies
</a>
</p>

<p>
        <a href="notification.php">
        <i class="fa-solid fa-bell fa-shake"></I>

 Notification
</a>
</p>
<?php else:  ?>

<?php endif; ?>
<p>
        <a href="#">
        <i class="fa fa-question"></i>
     Help
</a>
</p>

<?php
 if(isset($user)): ?>

<p>
 <a href="logout.php">
  <i class="fa fa-arrow-circle-right"></i>
  Logout
  <?php else: ?>
    <p><i class="fa fa-arrow-circle-left"></i><a href ="login.php">Login</a>

    <?php  endif; ?>

</a>
</p>
<div class="sidebar-social-media">
      <i class="fa fa-facebook"></i>
      <i class="fa fa-twitter"></i>
      <i class="fa fa-whatsapp"></i>
  </div>

</div>
</div>
</div>


      <script src="header.js"></script>

      </html>
</body>