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
    <link rel="stylesheet" href="livechat.css">
    <meta charset="UTF-8">
    <meta name="viewport"content="width=device-width,initial-scale=1.0">
          <link rel="stylesheet" href="https://fonts.sandbox.google.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
         
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.debug.js"></script>

<link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Anek+Malayalam:wght@800&family=Bungee+Spice&family=Kdam+Thmor+Pro&family=Macondo&family=Mingzat&family=Montserrat:wght@300&family=Playfair+Display:wght@400;500;600&family=Poppins:wght@300;400;500;600;700&family=Roboto+Flex:opsz,wght@8..144,100;8..144,400&family=Roboto:ital,wght@0,300;0,400;0,900;1,300&display=swap" rel="stylesheet">


      </head>
<body>

<div class="livechat-container">
<i class= "fa fa-bookmark"></i>
<div class="message">
    Hi i'm Dera,how may i help you?
</div>
</div>

<div class="open-livechat-container-overlay">

<div class="start-conversation-container">
<span class="material-symbols-outlined" id="close-livechat-btn" style="color: white">cancel</span>

<p style="color:white">Hi,you can send us a direct message here or start a conversation.</p>

<p class="start-conversation"onclick="alert('Coming soon')">Start a conversation</p>

</div>
<div class="question-and-answers">
<h2>Looking for help?</h2>
      <p>Write into the search bar and get response immediately.</p>
<form>
<input type="search"> <input type="submit">
</form>

<h2>Fequently asked questions</h2>

<p>Why use developers blog? <i class="fa fa-plus-circle"></i></p>

<p>Can i become a blogger on this platform? <i class="fa fa-plus-circle"></i></p>

<p>What is your motive? <i class="fa fa-plus-circle"></i></p>

<p>What motivated you all? <i class="fa fa-plus-circle"></i></p>

<p>Do you love coding? <i class="fa fa-plus-circle"></i></p>

<p>How long have you been planning on this? <i class="fa fa-plus-circle"></i></p>
</div>

</div>



<!--div class="livechat-conversation-container-overlay">

<div class="conversation-header">
<span class="material-symbols-outlined" id="close-livechat-conversation-btn">cancel</span>

      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTEnbIm0vC5iuUlzlK-87kKwHqKTHJsouBbug&usqp=CAU"width="120px">
   
</div>

  <!--p style="text-align:center;"> <?php /*echo date("l Y/m/d  h:i:sa")*/ ?></p>

<div class="bolt-auto-message">
Hi im Dera,i am currently unavaliable at the moment,kindly send a directy message to us by click <a href="h">here</a>.Be rest assure we will get back to you a soon as possible.Regard from #teamdevelopblog.
</div>
<br>
<div class="send-message">
      <form>
<input type="text"><input type="submit">
</form>
</div>

</div-->

<script src="livechat.js"></script>

</html>
</body>