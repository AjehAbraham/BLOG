<?php

$to = 'ajehabraham51@gmail.com';
$subject = 'Hi, this is Arif';
$message = "Let me know if you received this email
Let me know once you have sent it! If it does not send, please provide me the bounced message that you receive";
$header = "from :Developblog";
$retval = mail ($to,$subject,$message, $header);

if ($retval == TRUE){
    echo "mail sent sucessfully";
}else {
    echo "message fail to send";
}


?>