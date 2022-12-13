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
   
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width,initial-scale=1.0">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          <link rel="stylesheet" href="footer.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.debug.js"></script>
<link rel="preconnect" href="https://fonts.googleapis.com"> 
<!--link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin-->
<link href="https://fonts.googleapis.com/css2?family=Anek+Malayalam:wght@800&family=Bungee+Spice&family=Kdam+Thmor+Pro&family=Macondo&family=Mingzat&family=Montserrat:wght@300&family=Playfair+Display:wght@400;500;600&family=Poppins:wght@300;400;500;600;700&family=Roboto+Flex:opsz,wght@8..144,100;8..144,400&family=Roboto:ital,wght@0,300;0,400;0,900;1,300&display=swap" rel="stylesheet">

<script src="https://kit.fontawesome.com/958aace4f6.js" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
      </head>
      <body>


      <div class="feedBack">
            <p> Send feed back </p>
            <p>Please tell us how to improve our services.</p>
<p class="rating"><i class="fa fa-thumbs-up" style="margin-left:40px;"  id="thumbs_up"></i>
<i class="fa fa-thumbs-down" style="margin-left:40px;" id="thumbs_down"></i></p>

<div class="thumbs_up_message">
<span class="material-symbols-outlined" id="close_thumb_up_btn">cancel</span>

<p class="thank_you">Thank you.</p>

<p>We are here to serve you better.</p>
<div class="futher-complain">
      <form method="post" action="complains.php">
      <label for="name">Email</label>
      <br>
      <input type="email" name="email" required>
      <br>
      <label for="name">Complains</label>
      <br>
      <textarea cols="10" rows="10" name="complain" required></textarea>
      <br>
      <input type="submit" value="send">
      <p>We are going to review your complain and send you a response shortly.</p>
</form>

</div>
</div>
</div>

            
<div class="News-letter">
      <p style="font-size:24px;text-align:center;color:rgb(0,0,56);">Subscribe to our news letter.</p>
<form action ="process news letter.php" method="post" onsubmit="openLoader()">
      <label for="email"><b>Email:</b></label>
      <br>
      <input type="email" name="Email" placeholder="Enter mail" requried>
      <br>
      <input type="submit" class="submit-btn" value="Subscibe">
</form>
</div>


<p class="back-to-top">

<i class="fa fa-angle-double-up"id="back-to-top"></i>

Back to top
</p>

<div class="footer">
  <p><b>Follow us on social media</b></p>
<p class="social-media">
<i class="fa fa-facebook"></i>
<i class="fa fa-whatsapp"></i>
<i class="fa fa-twitter"></i>
<i class="fa fa-github"></i>
</p>


<p><a href="#">Terms and condtions</a>
    <br><a href="#">Privacy Policy</a>
    <br> <a href="#">Cookie Policy</a>
    </p>
    <div class="footer-logo">Powered by LazerTech<span class="material-symbols-outlined">filter_list<span></div>

    <p><b>All Right Reserved</b></p>
<p><b>©2022- <?php echo date("Y")?> </b></p>
</div>

<div class="loader-overlay">
<i class="fa-solid fa-spinner fa-spin-pluse"></i>
</div>



<script src="footer.js"></script>
      </html>
</body>