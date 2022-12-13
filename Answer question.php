<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta  name ="viewport"content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet"  href="Answerquestion.css" >

    <script src="https://kit.fontawesome.com/958aace4f6.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>


<div class="form-container">
    <h1>Answer Question</h1>
    <form method="post" action="process answer question..php" onsbumit="openLoader(event)">
    <label for="Answer-question"><b><Answer Question</b></Answer></label>
    <textarea style="outline: 2px solid red" cols="10" rows="5" name="Question_Answers" required placeholder="answer question..."id="auto_resize_box"></textarea><script src="https://cdnjs.cloudflare.com/ajax/libs/autosize.js/4.0.2/autosize.min.js"></script>
<script>autosize(document.querySelectorAll('#auto_resize_box'));</script>
    <br>
    
    <input type="hidden"  name="Row_id" value="<?php echo $row[id]; ?>">
    <br>
    <input type="submit"value="Answer Question">
    
    </form>
    
</div>
<script src="form style.js"></script>

</html>
</body
