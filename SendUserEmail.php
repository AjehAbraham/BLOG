<?php



include __DIR__. ("/connection.php");

$sql = "SELECT Email FROM register_db";

$result = $conn -> query ($sql);

if ($result -> num_rows > 0){

while($emails = $result -> fetch_assoc()){

    $emails_addr[] = $emails["Email"];
   
       $to = implode(",", $emails_addr);

  
$subject = 'Developblog';
$header = "from :developblog";

$header .= 'MIME-Version: 1.0' . "\r\n";
$header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
   
    
$message ='<h1 style="text-align: center; color: white;background-color: rgba(210,0,0,0.9);padding: 10px 10px ">DevelopBlog</h1>';


 $message .='<p style="margin-left:5px">Hi </p>';

$message .= '<p style="text-align: center">We are sending you this mail to inform you that you can now aks question,post your own question and also reply to users comment, so what are you waiting for? click <a href="https://developblog.tech/blog post.php"> here</a> to view more</p>" ';


 $mesage .= '</p style="margin-left: 5px"><b>Teamdevelopblog</b></p>';

    $retval =  mail($to,$subject,$header,$message);

    if ($retval == TRUE){
        echo "<p>mail sent sucessfully</p>";
    }else {
        echo "<p>message fail to send</p>";
    }
    

}

}

?>
