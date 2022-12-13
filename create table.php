<?php 
/*
include __DIR__.("/connection.php");

$sql_table = "CREATE TABLE Question_Answer_table (id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,

User_id INT(20) NOT NULL,

Post_id INT(20) NOT NULL,

Answers TEXT NOT NULL,

Date INT(20) NOT NULL,

ip_addr INT(20) NOT NULL

)";

if ($conn -> query ($sql_table) == TRUE){
    
    echo "Table created ";
}
else{
    die("connect error".$conn_error);
}


/*
include __DIR__.("/connection.php"); 
$sql = "CREATE TABLE General_post_comment(
    id INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Comment TEXT NOT NULL,
        User_id INT(20) NOT NULL,
        Post_id INT(128) NOT NULL,
        Date_posted TIMESTAMP NOT NULL,
        Ip_adddres INT(15) NOT NULL,
        Device_name VARCHAR(128) NOT NULL)
    
    ";

    if ($conn -> query($sql) == TRUE){
        echo "table created";
    }else{
        die("fail". $conn_error);
    }

*/
/*

include __DIR__.("/connection.php");
$sql_conn = "CREATE TABLE Question_answers(
    id INT(20) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Author_name VARCHAR(128) NOT NULL,
    Title VARCHAR(128) NOT NULL,
    Category VARCHAR(12) NOT NULL,
    Question TEXT NOT NULL,
    Code TEXT ,
    User_id_col INT(20),
    Post_date VARCHAR(20) NOT NULL
    )";

if ($conn -> query($sql_conn) == TRUE){
    echo "Table created";
}else{
    die("error");
}
echo "Wow!!";

*/
if ($_SERVER['REQUEST_METHOD'] == 'GET' && realpath(__FILE__)==
realpath($_SERVER['SCRIPT_FILENAME'])){

      header('HTTP/1.0 403 Forbiddden',TRUE,403);
      die("<h1> 403 Access denied!</h1>The file you are requesting for does not exist.");
}

/*

/*
$sql = "CREATE TABLE  aritcle(
id INT(20)
UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Title VARCHAR(128) NOT NULL,
content_story TEXT  NOT NULL
)";
/*

$sql = "CREATE
  TABLE authentication (
  `id` int(11) NOT NULL,
  `otp` varchar(10) NOT NULL,
  `expired` int(11) NOT NULL,
  `created` datetime NOT NULL
)";

if($conn -> query 

$sql  = "CREATE TABLE  News_letter_sub(
id INT(20)
UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Email VARCHAR(100) UNIQUE NOT NULL,
ip_add VARCHAR(20) NOT NULL,
date_reg VARCHAR(12) NOT NULL

)";
if($conn -> query ($sql) == TRUE){
   echo "all table created";
 }else{
    echo "fatal error check" .$conn -> error;
 }


$sql = "CREATE TABLE  register_db(id INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
First_name VARCHAR(90) NOT NULL,
Last_name VARCHAR(90) NOT NULL,
Email VARCHAR(90) UNIQUE  NOT NULL,
Password VARCHAR(255) NOT NULL,
Ip_address VARCHAR(18) NOT NULL
)";

 if($conn -> query ($sql) == TRUE){
   echo "all table created";
 }else{
    echo "fatal error check" .$conn -> error;
 }
 /*
 $Table_2 = "CREATE TABLE Customers_complains(
    
    id  INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Email VARCHAR(100) NOT NULL,
    Complains TEXT NOT NULL,
    Ip_add VARCHAR(22) NOT NULL,
    Date_sent VARCHAR(15) NOT NULL
    )";
    if($conn -> query ($Table_2) == TRUE){
    echo "all table created";
  }else{
     echo "fatal error check" .$conn -> error;
  }

$Table_3 ="CREATE TABLE News_letter_sub(
    id INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Email VARCHAR(90) UNIQUE  NOT NULL,
    ip_add VARCHAR(20) NOT NULL,
    date_reg INT(12) NOT NULL)";
     /*
if($conn -> query ($Table_) == TRUE){
    echo "all table created";
  }else{
     echo "fatal error check" .$conn -> error;
  }

$Table_4  = "CREATE TABLE  Question_answers(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
Authors_name VARCHAR(128) NOT NULL,
Title VARCHAR(255) NOT NULL,
Category VARCHAR(90)   NOT NULL,
Question TEXT NOT NULL,
Code TEXT ,
User_id_col VARCHAR(20),
Post_date VARCHAR(15)
)
";

$Table_5 = "CREATE TABLE  aritcle(id INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
title VARCHAR(255) NOT NULL,
content_story TEXT  NOT NULL
)";
/*
if($conn -> query ($Table_5) == TRUE){
    echo "all table created";
  }else{
     echo "fatal error check" .$conn -> error;
  }
/*
$Table_5 = "CREATE TABLE  Profile_photo(id INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
image_path VARCHAR(255) NOT NULL,
content_story TEXT  NOT NULL
";
if($conn -> query ($Table_5) == TRUE){
    echo "all table created";
  }else{
     echo "fatal error check" .$conn -> error;
  }

$Table_6 = "CREATE TABLE  Profile_photos(id INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
image_path VARCHAR(255) NOT NULL,
User_ids INT(20),
date_uploaded VARCHAR(12)  NOT NULL
)";

if($conn -> query ($Table_6) == TRUE){
    echo "all table created";
  }else{
     echo "fatal error check" .$conn -> error;
  }
  */