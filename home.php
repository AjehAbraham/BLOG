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
    <link rel="stylesheet" href="home.css">
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width,initial-scale=1.0">     
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.debug.js"></script>
<!--link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Anek+Malayalam:wght@800&family=Bungee+Spice&family=Kdam+Thmor+Pro&family=Macondo&family=Mingzat&family=Montserrat:wght@300&family=Playfair+Display:wght@400;500;600&family=Poppins:wght@300;400;500;600;700&family=Roboto+Flex:opsz,wght@8..144,100;8..144,400&family=Roboto:ital,wght@0,300;0,400;0,900;1,300&display=swap" rel="stylesheet"-->
<link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Encode+Sans:wght@300&family=Island+Moments&family=Noto+Sans:ital,wght@1,200&family=Oswald:wght@200&family=Roboto+Mono:wght@100&display=swap" rel="stylesheet">

      </head>
<body>

<div class="intoduction-and-welcome-message">
<p>Welcome to developers blog</p>

<h3>About</h3>
<p style="margin-left: auto;margin-right:auto;display:block;width:90%">developers blog was built by young nigerian students with the aim of connecting developers around the world to help solve problems in all aspect of tech world.our vision is to make sure developers learn from each other by asking questions,answering questions,bring up topics and also educating other young/new student in the tech world or those intrested in learning more,developing technology or technology  related courses/fields.We can all achieve this by contributing our own quater to help make it easier and better for us all.If you are not satisfy with our services please dont hesitate to send us a complain so that we can improve our services to make this blog better.</p>

</div>
</div>

<div class="founders-images">
    <p style="text-align: center;font-size:30px; color:rgba(210,0,0,0.9)"><b></b>Developer</b></p>
      <img src="images\admin_image.jpeg"width="100px">
      <br>
<p>AJEH ABRAHAM(junior developer) </p>

<!--img src=""width="100px">
<p>Noob jnr</p>
<img src=""width="100px">
<p>Junior God</p>
</div-->
</div>
</div>

 
<?php include __DIR__.("/livechat.php"); ?>

<div class="details-container">
<p>We bring you alot ranging from news,question and answers for developers,health tips and lor more coming soon.<b>Note:</b> This website is under testing,we would love to get feedback from you to help inprove our services to make it better before we finally lunch our website fully</p>

<p>Make sure to report all suspicious activities on our website to the proper channel  and also make sure to read our terms and conditions properly to understand how we work to serve you better.</p>

</div>


<div class="box">
<div class="text-conatiner-introduction">
<h1>Want to be a bloger? </h1>

<p>We got you covered </p>
<img src="images\blogger.jpeg" width="100px">

</div>
</div>

<div class="box">
<div class="introduction-container-news">
<h1>News</h1>
<p>Catch up with the latest news around the world for free</p>
<img src="images\image_news.jpeg"width="100px">
</div>
</div>

<div class="box">

<div class="introduction-container-developer">
      <h1>Technology</h1>
      <p>Are you a software engineer or a dveloper?</p>
      <img src="images\image_home_page.jpeg"width="100px">
</div>
</div>


<div class="box">
    
<div class="introduction-container-health-tips">
      <h1>Health tips</h1>
      <p>Get daily tips from a qualify specialist</p>
      <img src="images\health_tips.jpeg"width="100px">
</div>

<div class="box">

<div class="Ask-question-container">
    
    <h1>Ask Question</h1>
    <p>You can now ask random question and get response back. </p>
    <img src="images/quiz.jpeg"width="100px"
    
</div>
</div>
</div>


<div class="box">
<div class="Comment-container">
    
    <h1>You can share your taught and ideas too!</h1>
    <p>Share your taught and ideals by answering  questions.</p>
    <img src="images/Comment-box.jpeg"width="100px">
    
</div>

</div>



<script src="home.js"></script>

</html>
</body<